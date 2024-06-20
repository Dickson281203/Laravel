@extends('layouts.template')
@section('content')
<div class="body-content">
    <div class="decoration blur-2"></div>
    <div class="decoration blur-3"></div>
    <div class="container-xxl">
        <form method="" action="">
            <div class="card mb-4">
                <div class="card-header position-relative">
                    <h6 class="fs-17 fw-semi-bold mb-0">Book Sales</h6>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Book Title</label>
                                <select class="form-select">
                                    <option selected="">Select</option>
                                    <option value="1">Romadwdwdnce</option>
                                    <option value="2">dwdw</option>
                                    <option value="3">sceece</option>
                                </select>
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-6">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">User</label>
                                <input type="text" class="form-control" placeholder="+ Add Stock" required="" value="Adry Mirza" readonly>
                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-6">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Book Title</label>
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
                                <label class="required fw-medium mb-2">Quantity</label>
                                <input type="number" class="form-control" placeholder="1" required="">

                            </div>
                            <!-- end /. form group -->
                        </div>
                        <div class="col-sm-12">
                            <!-- start form group -->
                            <div class="">
                                <label class="required fw-medium mb-2">Price</label>
                                <input type="number" class="form-control" placeholder="Rp." required="">
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