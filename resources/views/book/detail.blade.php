@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <div class="align-items-end row g-4 mb-4" data-aos="fade-down">
            <div class="col">
                <!-- start section header -->
                <div class="section-header">
                    <!-- start subtitle -->
                    <div class="font-caveat fs-4 fw-bold fw-medium section-header__subtitle text-capitalize text-center text-primary text-xl-start">Book</div>
                    <!-- end /. subtitle -->
                    <!-- start title -->
                    <h2 class="fw-semibold mb-0 section-header__title text-capitalize text-center text-xl-start h3">Detail Information</h2>
                    <!-- end /. title -->
                    <!-- start description -->
                    <div class="sub-title fs-16 text-center text-xl-start">a little information about<span class="text-primary fw-semibold"> This Book</span></div>
                    <!-- end /. description -->
                </div>
                <!-- end /. section header -->
            </div>
            <div class="col-12 col-xl-auto">
                <!-- start button -->
                <a href="{{ route('book.index') }}" class="align-items-center d-flex fs-14 fw-bold gap-2 justify-content-center justify-content-xl-end l-spacing-1 text-primary text-uppercase">
                    Back to Book List Page
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"></path>
                    </svg>
                </a>
                <!-- end /. button -->
            </div>
        </div>
        <!-- start card list -->
        <div class="border-0 card card-hover flex-fill overflow-hidden rounded-3 shadow-sm w-100 card-hover-bg mb-3">
            <div class="card-body p-0">
                <div class="g-0 h-100 row">
                    <div class="col-lg-3 col-md-5 col-sm-4 col-xxl-2 position-relative">
                        <div class="card-image-hover dark-overlay h-100 overflow-hidden position-relative">
                            <!-- start image -->
                            <img src="assets/dist/img/avatar/03.jpg" alt="" class="h-100 w-100 object-fit-cover">
                            <!-- end /. image -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7 col-sm-8 col-xxl-10 p-3 p-lg-4 p-md-3 p-sm-4">
                        <div class="d-flex flex-column h-100">
                            <div class="d-flex end-0 gap-2 me-3 mt-3 position-absolute top-0 z-1">
                                <a href="" class="align-items-center bg-light btn-icon d-flex justify-content-center rounded-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bookmark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </a>
                            </div>
                            <!-- <div class="align-items-center d-flex flex-wrap gap-1 text-primary  card-start mb-2">
                                <i class="fa-solid fa-star"></i>
                                <span class="fw-medium text-primary"><span class="fs-6 fw-semibold me-1">(4.5)</span>2,391 reviews</span>
                            </div> -->
                            <!-- start card title -->
                            <h4 class="fs-18 fw-semibold mb-0">
                                <span>Chuijhal Hotel And Restaurant</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
                                </svg>
                            </h4>
                            <!-- end /. card title -->
                            <a href="{{ route('author.detail') }}" class="fw-medium text-primary"><span class="fs-6 fw-semibold me-1">Author By :</span>Adry Mirza</a>
                            <a href="{{ route('publisher.detail') }}" class="fw-medium text-primary"><span class="fs-6 fw-semibold me-1">Publisher By :</span>Erlangga</a>
                            <!-- start card description -->
                            <br>
                            <span class="fw-medium text-primary"><span class="fs-6 fw-semibold me-1">Price : Rp.</span>120.000</span>
                            <br>
                            <h6 class="mt-1 fs-14">Synopsys.</h6>
                            <h6 class="mt-1 fs-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatibus, saepe necessitatibus aut rem maiores sint ea reprehenderit voluptatem quisquam eaque harum distinctio enim inventore autem fugiat? Praesentium, ut dicta!</h6>
                            <!-- start contact content -->
                            <div class="d-flex flex-wrap gap-3 gap-lg-2 gap-xl-3 mt-auto z-1">
                                <a class="d-flex gap-2 align-items-center fs-6 fw-semibold me-1">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                    <span>Genre : Thriller, Mystery, Dark Comedy</span>
                                </a>
                            </div>
                            <br>
                            <div class="d-flex flex-wrap gap-3 gap-lg-2 gap-xl-3 mt-auto z-1">
                                <a class="d-flex gap-2 align-items-center fs-14 fw-semibold">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <span>Stock : 13</span>
                                </a>
                            </div>
                            <!-- end contact content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection