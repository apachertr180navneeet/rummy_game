@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User Category Add</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="projectname">Name *</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name" required>
                                </div>

                                <div class="form-group">
                                    <label for="projectname">Amount *</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name" required>
                                </div>

                                <div class="form-group">
                                    <label for="projectname">Percentage(%)*</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name" required>
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

@section('script')
@endsection
