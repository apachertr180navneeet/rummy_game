@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="page-title-box">
                <h4 class="page-title">Teen Patti Table Master Management</h4>
            </div>
        </div>
        <div class="col-6">
                <a href="{{route('admin.teenpatti.tableAdd')}}" class="btn btn-primary">Add Teen Patti Table Master</a>
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
                                        <th>Boot Value</th>
                                        <th>Chaal Limt</th>
                                        <th>Pot Limt</th>
                                        <th>Date and Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>0.50</td>
                                        <td>64.00</td>
                                        <td>512.00</td>
                                        <td>28-01-2024 08:02:49 AM</td>
                                        <td><a href="{{ route('admin.teenpatti.tableEdit' ,$id) }}"><i class="dripicons-document-edit"></i></a>|<a href=""><i class="dripicons-document-delete"></i></a></td>
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
