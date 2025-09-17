@extends('layouts.web.app')

@section('content')
    <div class="dashboard-content">
        <div class="content-wrap">
            <h2>Your Profile</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <form action="" class="profile-form">
                    <div class="inp-wrap row">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">First Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control custom-input" placeholder="First Name">
                        </div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">Last Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control custom-input" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control custom-input" placeholder="Email">
                        </div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">Phone Number</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control custom-input" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">Address</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control custom-input" placeholder="Address">
                        </div>
                    </div>
                    <div class="inp-wrap row justify-content-start mt-5">
                        <div class="col-lg-4">
                            <label for="" class="custom-label">Two Factor Authentication</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex gap-5 radio-wrap">
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor" class="" name="two-factor-auth" checked>
                                    <label for="factor">OFF</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor2" class="" name="two-factor-auth">
                                    <label for="factor2">On</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inp-wrap row">
                        <input type="submit" class="load-btn bg-secondary text-white" style="width: 200px;"
                            value="Save Changes">
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="profile-wrap bg-secondary">
                    <form action="">
                        <img id="img-preview" src="{{ asset('assets/web/images/profile-pic.png') }}" alt="">
                        <div class="img-update-btn">
                            <input id="upload-profile" type="file" accept="image/*" onchange="readURL(this)"
                                style="display: none" />
                            <label for="upload-profile" class="load-btn">UPLOAD A FILE</label>
                        </div>
                        <h1>Update Password</h1>
                        <div class="login-fields-area d-flex justify-content-start align-items-center">
                            <div class="field-icon-area">
                                <img src="{{ asset('assets/web/images/padlock.png') }}" alt="">
                            </div>
                            <div class="form-floating flex-grow-1">
                                <input type="password" name="password" id="" class="form-control">
                                <label for="password">PASSWORD</label>
                            </div>
                        </div>
                        <div class="login-fields-area d-flex justify-content-start align-items-center">
                            <div class="field-icon-area">
                                <img src="{{ asset('assets/web/images/padlock.png') }}" alt="">
                            </div>
                            <div class="form-floating flex-grow-1">
                                <input type="password" name="password" id="" class="form-control">
                                <label for="password">CONFIRM PASSWORD</label>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="load-btn bg-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
