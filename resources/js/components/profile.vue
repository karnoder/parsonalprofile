<template>
    <!-- content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <profilebreadcrumb></profilebreadcrumb>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <a href="#">
                                    <img class="rounded-circle" id="" alt="User Image" src="">
                                </a>
                                <div class="upload-img">
                                    <a class="photo-edit-link" data-toggle="modal" href="#edit_photo">
                                        <p>Edit</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-0"></h4>
                            <h6 class="text-muted"></h6>
                            <div class="pb-3">
                                <i class="fas fa-map-marker-alt"></i>
                                Florida, United States
                            </div>
                            <div class="about-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                        <div class="col-auto profile-btn">
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">

                    <!-- Personal Details Tab -->
                    <div class="tab-pane fade show active" id="per_details_tab">

                        <!-- Personal Details -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details">
                                                <i class="fa fa-edit mr-1"></i>
                                                Edit
                                            </a>
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-10"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
                                            <p class="col-sm-10">24 Jul 1983</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
                                            <p class="col-sm-10"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-10">01617253586</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Personal Details -->

                    </div>
                    <!-- /Personal Details Tab -->

                    <!-- Change Password Tab -->
                    <div id="password_tab" class="tab-pane fade">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="" method="POST">

                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="old_password" value=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new_password" class="form-control"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="cnew_password" class="form-control"
                                                    value="">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Change Password Tab -->

                </div>
            </div>
        </div>

    </div>
    <!-- /content -->
</template>

















<!-- Edit Details Modal -->
<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editparsonalinfo') }}">
                    <div class="row form-row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="Allen">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="Davis">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control" value="24-07-1983">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="email" class="form-control" value="allendavis@example.com">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" value="+1 202-555-0125" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <h5 class="form-title"><span>Address</span></h5>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="4663 Agriculture Lane">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Details Modal -->

<!-- Edit Photo Modal -->
<div class="modal fade" id="edit_photo" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile Photo Change</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('profileimageupload') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row form-row">
                        <div class="col-12 col-sm-4">
                            <div class="modal_image">
                                <img class="rounded-circle w-100" id="image_id" alt="User Image"
                                    src="{{asset('uploads/user_photos').'/'.Auth::user()->photo}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group justify-content-center d-flex">
                                <input class="upload_btn m-t-50" id="photo" type="file" name="new_profile_photo"
                                    onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Photo Modal -->
