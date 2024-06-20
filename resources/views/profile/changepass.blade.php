@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <!-- Start Page Header -->
        <div class="card mb-3 p-3">
            <!-- Profile Cover -->
            <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                    <img class="profile-cover-img" src="assets/dist/img/profile-bg.jpg" alt="Image Description">
                    <div class="end-0 me-3 mt-3 position-absolute top-0">
                        <button type="button" class="align-items-center btn btn-light btn-sm d-flex fw-medium gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            Upload header
                        </button>
                    </div>
                </div>
            </div>
            <!-- /. End Profile Cover -->
            <div class="text-center">
                <!-- Start Image -->
                <img class="bg-white p-1 position-relative profile-cover-avatar rounded-circle shadow" src="assets/dist/img/avatar/05.jpg" alt="">
                <!-- /. End Image -->
                <!-- Start Title -->
                <h4 class="align-items-center justify-content-center d-flex gap-2 mt-3 mb-2 fw-semibold">
                    Dickson Teo
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
                    </svg>
                </h4>
                <!-- /. End Title -->
                <ul class="fs-14 fw-medium list-inline list-separator mb-0 mb-2 text-muted justify-content-center">
                    <li class="list-inline-item">
                        <!-- <i class="fa-solid fa-location-dot fs-14 me-1"></i> -->
                        <i class="fa-solid fa-envelope-circle-check"></i>
                        <span>admin@gmail.com</span>
                    </li>
                    <li class="list-inline-item">
                        <!-- <i class="fa-solid fa-location-dot fs-14 me-1"></i> -->
                        <i class="fa-solid fa-phone"></i>
                        <span>0851 7665 843</span>
                    </li>
                    <li class="list-inline-item">
                        <!-- <i class="fa-solid fa-user fs-14 me-1"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt me-1" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <a href="#">Perum. Kintamani, Batam, Indonesia</a>
                    </li>
                    <li class="list-inline-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-plus me-1" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM8 8a.5.5 0 0 1 .5.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 8 8" />
                        </svg>
                        <span>Joined Oct 2023</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /. End Page Header -->

        <form method="get" action="" enctype="multipart/form-data">
            <div class="card mb-4">
                <div class="card-header position-relative">
                    <h6 class="fs-17 fw-semi-bold mb-0">Change Password</h6>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Current Password</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-6">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">New Password</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-12">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Confirm Password</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <!-- end /. form group -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary-soft"><i class="fa fa-plus me-2"></i>Save</button>
            </div>
        </form>
    </div>
</div>
@endsection