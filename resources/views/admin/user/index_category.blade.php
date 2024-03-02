@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User Category List</h4>
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
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Percentage(%)</th>
                                        <th>Date and Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Navneet Gehlot</td>
                                        <td>$320,800</td>
                                        <td>10%</td>
                                        <td>28-01-2024 08:02:49 AM</td>
                                        <td><a class="btn btn-success" href="{{ route('admin.user.view' ,$id) }}">Edit</a>|
                                            <a class="btn btn-danger href="">Delete</a></td>
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
