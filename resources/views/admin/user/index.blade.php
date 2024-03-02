@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User List</h4>
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
                                        <th>User Id</th>
                                        <th>Image</th>
                                        <th>Name On Account</th>
                                        <th>Jezz Cash Account Number</th>
                                        <th>Easy Paisa Acc. No.</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>User Type</th>
                                        <th>User Category</th>
                                        <th>Wallet</th>
                                        <th>Winning Wallet</th>
                                        <th>On Table</th>
                                        <th>Status</th>
                                        <th>Date and Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Navneet Gehlot</td>
                                        <td>1</td>
                                        <td><img src="{{asset('assets/admin/images/logo.png')}}" alt="" height="50"></td>
                                        <td>Navn</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>gsgwebsoft@gmail.com</td>
                                        <td>7821810600</td>
                                        <td>REAL</td>
                                        <td></td>
                                        <td>1000.00</td>
                                        <td>0.00</td>
                                        <td>No</td>
                                        <td>Active</td>
                                        <td>28-01-2024 08:02:49 AM</td>
                                        <td><a href="{{ route('admin.user.view' ,$id) }}"><i class="dripicons-preview"></i></a>|<a href=""><i class="dripicons-wallet"></i></a>|<a href=""><i class="dripicons-card"></i></a>|<a href=""><i class="dripicons-card"></i></a>|<a href=""><i class="dripicons-document-edit"></i></a>|<a href=""><i class="dripicons-document-delete"></i></a></td>
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
