@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="page-title-box">
                <h4 class="page-title">Payment History</h4>
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
                                        <th>User ID</th>
                                        <th>Plan ID</th>
                                        <th>Coin</th>
                                        <th>Price</th>
                                        <th>Add Date & Time</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>navneet</td>
                                        <td>3</td>
                                        <td>52</td>
                                        <td>50</td>
                                        <td>50</td>
                                        <td>17-01-2024 11:32:27 AM</td>
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
