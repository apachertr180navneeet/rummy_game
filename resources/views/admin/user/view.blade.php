@extends('admin.layouts.app') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User Detail</h4>
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
                                            <a href="#purchase" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Purchase</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#reffer" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Reffer Earn</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#purchase_reffer" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Purchase Reffer</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#welcome_reffer" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Welcome Reffer</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#wallet_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Wallet Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#rummy_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Point Rummy Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#pool_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Pool Rummy Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#deal_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Deal Rummy Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#patti_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Teen Patti Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#dragon_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Dragon Tiger Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ander_log" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Andar Bahar Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#seven_up" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Seven Up Down Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#color_prediction" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Color Prediction Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#car_roulette" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Car Roulette Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#animal_roulette" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Animal Roulette Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#jackpot" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Jackpot Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ludoHistory" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Ludo Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#head_tails" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Head & Tails Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#red_black" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Red Vs Black Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#baccarat" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Baccarat Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#jhandimunda" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Jhandi Munda Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#roulette" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Roulette Log</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#poker" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Roulette Log</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="purchase">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Plan ID</th>
                                                    <th>Coins</th>
                                                    <th>Price</th>
                                                    <th>Payment Status</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>52</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>Done</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>52</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>Done</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>52</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>Done</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane show" id="reffer">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>User Name</th>
                                                    <th>Coins</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Navn</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="purchase_reffer">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>User Name</th>
                                                    <th>Coins</th>
                                                    <th>Level</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Navn</td>
                                                    <td>50</td>
                                                    <td>1</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="welcome_reffer">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>User Name</th>
                                                    <th>Coins</th>
                                                    <th>Level</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Navn</td>
                                                    <td>50</td>
                                                    <td>1</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="wallet_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>User Name</th>
                                                    <th>Coins</th>
                                                    <th>Level</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Navn</td>
                                                    <td>50</td>
                                                    <td>1</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="rummy_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="pool_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="deal_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="patti_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="dragon_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="ander_log">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="seven_up">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="color_prediction">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="car_roulette">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="animal_roulette">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="jackpot">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="ludoHistory">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="head_tails">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="red_black">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="baccarat">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="jhandimunda">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="roulette">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
                                                    <td>17-01-2024 11:32:27 AM</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="poker">
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Game Id</th>
                                                    <th>User Id</th>
                                                    <th>Bet</th>
                                                    <th>Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>User Amount</th>
                                                    <th>Comission Amount</th>
                                                    <th>Added Date and Time</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>01</td>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>100</td>
                                                    <td>100</td>
                                                    <td>110</td>
                                                    <td>50</td>
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
@endsection @section('script') @endsection
