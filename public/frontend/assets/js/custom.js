$(document).ready(function () {
    //LOAD CART COUNT
    loadcart();
    function loadcart() {
        $.ajax({
            method: 'GET',
            url: 'http://localhost/laravel_lms/load-cart-data',
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                //console(response.count);
            }
        });
    }

    //ADD TO CART FUNCTIONALITY
    $('.add_to_cart').click(function (e) {
        e.preventDefault();
        var course_id = $(this).closest('.product_data').find('.course_id').val();
        var course_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "http://localhost/laravel_lms/add-to-cart",
            method: "POST",
            data: {
                'course_id': course_id,
                'course_qty': course_qty,
            },
            success: function (response) {
                //console.log(response);
                if (response.success) {
                    toastr.success(response.success);
                } else {
                    toastr.error(response.error);
                }
                loadcart();
            }
        });
    });

    //DELETE CART ITEM
    $('.delete-cart-item').click(function (e) {
        e.preventDefault();
        var course_id = $(this).closest('.product_data').find('.course_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'course_id': course_id
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.success);
                } else {
                    toastr.error(response.error);
                }
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
                //$(".table-responsive").load(window.location.href + " .table-responsive");
            }
        });
    });

    //DELETE ALL CART ITEMS
    $('.delete_all_cart_data').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: 'delete-all-cart-item',
            method: 'post',
            success: function (response) {
                if (response.success) {
                    toastr.success(response.success);
                } else {
                    toastr.error(response.error);
                }
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        })
    });

    //SEARCH COURSE
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "http://localhost/laravel_lms/course-list",
        success: function (response) {
            startAutoComplete(response);
            //console.log(response);
        }
    });
    function startAutoComplete(availableTags) {
        $("#search_course").autocomplete({
            source: availableTags
        });
    }

    $('.apply_coupon_btn').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var coupon_code = $('.coupon_code').val();
        //alert(coupon_code);
        if ($.trim(coupon_code).length == 0) {
            error_coupon = "Please enter valid coupon";
            $('#error_coupon').text(error_coupon);
        } else {
            error_coupon = '';
            $('#error_coupon').text(error_coupon);
        }

        if (error_coupon != '') {
            return false;
        }

        $.ajax({
            url: "http://localhost/laravel_lms/check-coupon-code",
            method: "POST",
            data: {
                'coupon_code': coupon_code
            },
            success: function (response) {
                //console.log(response);
                if (response.error_status == 'error') {
                    toastr.error(response.status);
                    $('.coupon_code').val('');
                } else {
                    var discount_price = response.discount_price;
                    var grand_total_price = response.grand_total_price;
                    $('.coupon_code').prop('readonly', true);
                    $('.discount_price').text(discount_price);
                    $('.grandtotal_price').text(grand_total_price);
                }
            }
        });

    });

});