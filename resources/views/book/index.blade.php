@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <div class="card">
            <div class="card-header position-relative">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h6 class="fs-17 fw-semi-bold my-1">Book Data</h6>
                        <!-- <p class="mb-0">Duis vulputate metus fringilla, aliquet ex sed, pulvinar justo.</p> -->
                    </div>
                    <div class="text-end">
                        <a href="{{ route('book.create') }}" class="btn btn-primary fw-medium"><i class="fa-solid fa-plus me-1"></i>Create New Book</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless category-list">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Cover</th>

                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Genre</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>
                                    <span class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="assets/dist/img/avatar/03.jpg" alt="Image Description">
                                    </span>
                                </td>
                                <td>
                                    <div class="fw-medium">Chuijhal Hotel And Restaurant</div>
                                </td>
                                <td>Martin Kelvin</td>
                                <td>Josuah Kimmich</td>
                                <td>Thirller</td>
                                <td>Rp. 120.000</td>
                                <td>
                                    <div class="align-items-center d-flex fw-medium gap-1 text-success fs-14">
                                        <i class="fa-circle fa-solid fs-10"></i>
                                        <span>Ready</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('book.detail') }}" class="btn btn-primary btn-sm">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        <a href="{{ route('book.edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('book.delete') }}" class="btn btn-primary btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection