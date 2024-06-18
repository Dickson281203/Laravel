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
                        <h6 class="fs-17 fw-semi-bold my-1">Publisher Data</h6>
                        <!-- <p class="mb-0">Duis vulputate metus fringilla, aliquet ex sed, pulvinar justo.</p> -->
                    </div>
                    <div class="text-end">
                        <a href="{{ route('publisher.create') }}" class="btn btn-primary fw-medium"><i class="fa-solid fa-plus me-1"></i>Create New Publisher</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless category-list">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Publisher's Name</th>
                                <th>Gmail</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>
                                    <div class="fw-medium">Erlangga</div>
                                </td>
                                <td>erlangga@gmail.com</td>
                                <td>0778 1221 234</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('publisher.detail') }}" class="btn btn-primary btn-sm">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        <a href="{{ route('publisher.edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('publisher.delete') }}" class="btn btn-primary btn-sm">
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