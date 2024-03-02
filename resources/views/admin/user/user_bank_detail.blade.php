@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User Bank Detail</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>User Name</th>
                                        <th>Bank Name</th>
                                        <th>IFSC Code</th>
                                        <th>Account holder Name</th>
                                        <th>Account Number</th>
                                        <th>Date and Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Navneet Gehlot</td>
                                        <td>Axix BAnk</td>
                                        <td>UTIB0004397</td>
                                        <td>Navneet Gehlot</td>
                                        <th>922010046886552</th>
                                        <td>28-01-2024 08:02:49 AM</td>
                                        <td><a class="btn btn-success" href="{{ route('admin.user.view' ,$id) }}">Edit</a>|
                                            <a class="btn btn-danger" href="">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection

@section('script')
@endsection
