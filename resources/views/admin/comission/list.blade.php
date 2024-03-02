@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="page-title-box">
                <h4 class="page-title">Comission Management</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="justified-tabs-preview">
                                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                        <li class="nav-item">
                                            <a href="#3patti" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                <span class="d-none d-md-block">3 patti</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#point" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Point</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#andarbahar" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Andar Bahar</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#dargontiger" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Dargon Tiger</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#jakpot" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Jakpot</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="3patti">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game ID</th>
                                                    <th>Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane show" id="point">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game ID</th>
                                                    <th>Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>50</td>
                                                    <td>40</td>
                                                    <td>10</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="andarbahar">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game ID</th>
                                                    <th>Winning</th>
                                                    <th>Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>30</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="dargontiger">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game ID</th>
                                                    <th>Winning</th>
                                                    <th>Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>30</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="jakpot">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game ID</th>
                                                    <th>Winning</th>
                                                    <th>Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>30</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end preview-->
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
</div>
@endsection

@section('script')
@endsection
