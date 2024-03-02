@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">App Banner Add</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row"><label for="boot_value" class="col-sm-2 col-form-label">Banner *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="file" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection
