@include('frontend.include.header')
<div class="main__body__wrapp">
    <div class="header__banner__main header__banner__inner">
        <div class="image__box">
            <img alt="" src="{{asset('public/frontend')}}/assets/images/innerbanner.jpg" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <h1>My<span> Profile</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="what__you__wrapp">
        <div class="container">
            <div class="row">

                <div class="myprofile__wrapp">
                    <div class="col-sm-12">
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{asset('public/frontend')}}/assets/images/author1.png" alt="Hello Annie">
                            </div>
                            <div class="name__holder">
                                <h3>{{auth()->user()->name}}</h3>
                                <p>{{auth()->user()->email}}</p>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start profile-holder">
                        <div class="nav flex-column nav-pills me-3 tabs--all" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Details</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Orders</button>
                        </div>
                        <div class="tab-content details__wrapp" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h3>Personal Details</h3>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="profile__name">
                                            <p>Fullname</p>
                                            <span>{{auth()->user()->name}}</span>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="profile__name">
                                            <p>Email</p>
                                            <span>{{auth()->user()->email}}</span>

                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                        <div class="profile__name">
                                            <p>Phone</p>
                                            <span>{{auth()->user()->phone}}</span>

                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                        <div class="profile__name">
                                            <p>Address</p>
                                            <span>{{auth()->user()->address}}</span>

                                        </div>
                                    </div>


                                </div>

                                <div class="profile-form__btns-container d-flex justify-content-end">
                                    <button role="button" class="btn btn-secondary d-inline-block profile-form__btn--edit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square me-2"></i>Edit</button>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Personal Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text" value="Full name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" value="Email">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" value="Phone">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="password" value="" placeholder="Password">
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn btn-primary d-inline-block profile-form__btn--save mt-4">Save</button>
                                                        </div>


                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="table-responsive">
                                    <table class="table address-table mb-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl No</th>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Course Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($my_orders))
                                            @foreach($my_orders as $order)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$order->tracking_no}}</td>
                                                <td>{{$order->title}}</td>
                                                <td>₹{{$order->selling_price}}</td>
                                                <td class="d-flex">
                                                    <a href="#" class="address-table__btn--row-edit d-inline-block me-3 btn btn-outline-light text-dark"><i class="fa-solid fa-eye"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.include.footer')