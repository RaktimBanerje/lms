@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <h2 class="pt-0 mb-4">Checkout</h2>
                </div>

            </div>

            <form method="POST" action="{{route('order.store')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-sm-8 mb-4">
                                <h3 class="pt-0 mb-3">Contact</h3>
                            </div>

                            <div class="col-sm-4 mb-4">
                                <p class="text-right">Already have an account? <a href="#">Login</a></p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                                <div class="form-group checkout__form">
                                    <p>Email</p>
                                    @if(auth()->user())
                                    <input type="text" value="{{auth()->user()->email}}" name="email" placeholder="Email">
                                    @else
                                    <input type="text" name="email" placeholder="Email">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 mb-4">
                                    <h3 class="pt-0 mb-3">Billing Address</h3>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>Name</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->name}}" name="name" placeholder="Name">
                                        @else
                                        <input type="text" name="name" placeholder="Name">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>Phone</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->phone}}" name="phone" placeholder="Phone">
                                        @else
                                        <input type="text" name="phone" placeholder="Phone">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>Address</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->address}}" placeholder="Address" name="address">
                                        @else
                                        <input type="text" placeholder="Address" name="address">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-5 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>Country</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->country}}" placeholder="Country" name="country">
                                        @else
                                        <input type="text" placeholder="Country" name="country">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-5 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>State</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->state}}" placeholder="State" name="state">
                                        @else
                                        <input type="text" placeholder="State" name="state">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 mb-4">
                                    <div class="form-group checkout__form">
                                        <p>Pincode</p>
                                        @if(auth()->user())
                                        <input type="text" value="{{auth()->user()->pincode}}" placeholder="Pincode" name="pincode">
                                        @else
                                        <input type="text" placeholder="Pincode" name="pincode">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="checkout__holder">
                            <h3>Order Details</h3>
                            <table class="table table-striped">
                                <tbody>
                                    @php
                                    $total = 0;
                                    @endphp
                                    @if(count($cart_items) > 0)
                                    @foreach($cart_items as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td style="text-align: right; line-height: 45px;">₹{{$item->selling_price}}</td>
                                    </tr>
                                    @php
                                    $total += $item->selling_price;
                                    $gst = $total * 18 / 100;
                                    $grand_total = ($total * 18 / 100) + $total;
                                    @endphp
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td>Discount</td>
                                        <td style="text-align: right;" class="discount_price">₹0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td style="text-align: right;">₹{{$total}}</td>
                                    </tr>
                                    <tr>
                                        <td>Taxes</td>
                                        <td style="text-align: right;">₹{{$gst}}</td>
                                    </tr>
                                    <tr>
                                        <td>Grand Total</td>
                                        <td style="text-align: right;">₹{{$grand_total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="place_order">
                                <input type="submit" value="Place Order">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@include('frontend.include.footer')