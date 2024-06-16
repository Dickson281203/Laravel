@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Book Informations</h6>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Book Title</label>
                            <input type="text" class="form-control" required="">
                        </div>
                        <!-- end /. form group -->
                    </div>
                    <div class="col-sm-6">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Genre</label>
                            <select class="form-select">
                                <option selected="">Category</option>
                                <option value="1">Romance</option>
                                <option value="2">Thriller</option>
                                <option value="3">Horror</option>
                            </select>
                        </div>
                        <!-- end /. form group -->
                    </div>
                    <div class="col-sm-6">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Author</label>
                            <select class="form-select">
                                <option selected="">List</option>
                                <option value="1">Romance</option>
                                <option value="2">Thriller</option>
                                <option value="3">Horror</option>
                            </select>
                        </div>
                        <!-- end /. form group -->
                    </div>
                    <div class="col-sm-6">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Publisher</label>
                            <select class="form-select">
                                <option selected="">List</option>
                                <option value="1">Romance</option>
                                <option value="2">Thriller</option>
                                <option value="3">Horror</option>
                            </select>
                        </div>
                        <!-- end /. form group -->
                    </div>
                    <div class="col-sm-12">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Tags</label>
                            <input type="text" class="form-control" placeholder="+ Add tag" required="">
                        </div>
                        <!-- end /. form group -->
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Book's Cover</h6>
            </div>
            <div class="card-body">
                <!-- start form group -->
                <div class="">
                    <label class="required fw-medium mb-2">Gallery</label>
                    <input class="fileUp fileup-sm" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                    <div class="form-text">Recommended to 350 x 350 px (png, jpg, jpeg).</div>
                </div>
                <!-- end /. form group -->
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Synopsis</h6>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <!-- start form group -->
                        <div class="">
                            <label class="required fw-medium mb-2">Description</label>
                            <textarea class="form-control" rows="7" placeholder="Please enter up to 4000 characters."></textarea>
                        </div>
                        <!-- end /. form group -->
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Add Pricing plan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="faqs" class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="fw-medium">Harga Beli</th>
                                <th class="fw-medium">Harga Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" placeholder="IDR"></td>
                                <td><input type="text" class="form-control" placeholder="IDR"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary-soft"><i class="fa fa-plus me-2"></i>Save</button>
        </div>
    </div>
</div>
@endsection