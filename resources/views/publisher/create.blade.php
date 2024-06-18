@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <form method="" action="">
            <div class="card mb-4">
                <div class="card-header position-relative">
                    <h6 class="fs-17 fw-semi-bold mb-0">Publisher Informations</h6>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Publisher Name</label>
                                <input type="text" class="form-control" required="" placeholder="Enter Publisher's Name">
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-12">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Email</label>
                                <input type="email" class="form-control" required="" placeholder="Enter Publisher's Email">
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-12">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Phone Number</label>
                                <input type="number" class="form-control" required="" placeholder="Enter Publisher's Phone Number">
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