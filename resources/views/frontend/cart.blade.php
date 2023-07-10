@section('meta_title',"$cart->meta_title")
@section('meta_desc',"$cart->meta_desc")
@section('meta_keyword',"$cart->meta_keyword")
@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>Car<span>T</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 col-xxl-8 pe-lg-4">
                    <div class="table-responsive">
                        <table class="table cart-data-table">
                            <thead>
                                <tr class="bg--primary">
                                    <th scope="col">Image</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($cart_items) > 0)
                                @foreach($cart_items as $item)
                                <tr class="cart-data-table__row product_data">
                                    <input type="hidden" value="{{$item->id}}" class="course_id">
                                    <td>
                                        <a href="#" class="d-flex align-items-center cart-data-table__product">
                                            <span class="cart-data-table__product-image me-3">
                                                <img src="{{asset('public/courses/'.$item->thumbnail)}}" alt="product1" />
                                            </span>
                                        </a>
                                    </td>
                                    <td class="text--heading fw-bold">{{$item->title}}</td>
                                    <td class="text--heading fw-bold">₹{{$item->selling_price}}</td>
                                    <td class="text--heading fw-bold">
                                        <a href="#" class="delete-cart-item text-danger" title="">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" style="text-align: center;">Your Cart is Empty.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="{{route('index')}}" class="button button-primary con">Continue Shopping</a>
                        <a href="javascript:void(0)" class="cart-data-table__button--clear-total-items ms-3 text-uppercase">
                            <span><i class="bi bi-x-lg"></i></span>
                            <span class="delete_all_cart_data">Clear</span>
                        </a>
                    </div>

                    <div class="checkout-steps mx-4 mx-sm-0 d-none">
                        <div class="checkout-step__content mt-4">
                            <div class="address-container">
                                <ul class="address-saved-list row">
                                    <li class="address-saved-list__item col-12 col-sm-6 col-xl-4 selected">
                                        <div class="p-4 bg--light border-radius--custom border-custom-1">
                                            <p class="text--xs text--primary m-0 p-2">
                                                1/30 Lorem Street, Kolkata-5050, Near Lorem Shop
                                            </p>
                                            <a href="javascript:void(0)" class="address-saved-list__item--select-btn"><i class="bi bi-check-circle-fill"></i></a>
                                        </div>
                                    </li>
                                    <li class="address-saved-list__item col-12 col-sm-6 col-xl-4">
                                        <div class="p-4 bg--light border-radius--custom border-custom-1">
                                            <p class="text--xs text--primary m-0 p-2">
                                                1/30 Lorem Street, Kolkata-5050, Near Lorem Shop
                                            </p>
                                            <a href="javascript:void(0)" class="address-saved-list__item--select-btn"><i class="bi bi-check-circle-fill"></i></a>
                                        </div>
                                    </li>
                                    <div class="col-12 col-sm-6 col-xl-4 mt-3 mt-sm-0 text-center text-sm-start">
                                        <a class="button button-primary d-inline-block w-auto address-container__button--add-adress" data-bs-toggle="offcanvas" href="#addAddressOffCanvas" role="button" aria-controls="offcanvasExample">Add Address<span class="ms-1"><i class="bi bi-plus"></i></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 col-xxl-4 mt-5 mt-lg-0">
                    <div class="cart-total-wrapper order-summary bg--light border-custom-1 border-radius--custom p-4">
                        <h5 class="text--heading order-summary__heading mb-3">
                            Order Summary
                        </h5>
                        @php
                        $total = 0;
                        @endphp
                        @if(count($cart_items) > 0)
                        @foreach($cart_items as $item)
                        <ul class="order-summary__product-preview-container mt-1">
                            <li class="product-preview row">
                                <div class="col-7 p-0">
                                    <p class="text--primary text--sm">
                                        <span class="product-preview__title">{{$item->title}}</span>
                                    </p>
                                </div>
                                <div class="col-5 text-end p-0">
                                    <h6 class="m-0">₹{{$item->selling_price}}</h6>
                                </div>
                            </li>
                        </ul>
                        @php
                        $total += $item->selling_price;
                        $gst = $total * 18 / 100;
                        $grand_total = ($total * 18 / 100) + $total;
                        @endphp
                        @endforeach
                        <div class="cart__subtotal-container d-flex justify-content-between align-items-center mb-3">
                            <p class="text--sm text--primary m-0 fw-bold">Subtotal</p>
                            <h6 class="-0">₹{{$total}}</h6>
                        </div>
                        <div class="cart__subtotal-container d-flex justify-content-between align-items-center mb-3">
                            <p class="text--sm text--primary m-0 fw-bold">Taxes</p>
                            <h6 class="-0">₹{{$gst}}</h6>
                        </div>
                        <hr>
                        <div class="cart__total-container d-flex justify-content-between align-items-center mb-0">
                            <p class="text--lg text--primary m-0 fw-bold">Grand Total</p>
                            <h5 class="text--heading m-0">₹{{$grand_total}}</h5>
                        </div>
                        <a href="{{route('checkout')}}" class="con__checkout">Proceed To Checkout</a>
                        @else
                        <p style="text-align: center;">Your cart is empty</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('frontend.include.footer')