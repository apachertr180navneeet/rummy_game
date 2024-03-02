@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="page-title-box">
                <h4 class="page-title">Setting</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Mobile</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral Coins</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral Level 1</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral Level 2</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral Level 3</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral ID</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Referral Link</label>
                                    <input type="text" id="simpleinput" class="form-control" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Contact Us</label>
                                    <textarea></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Terms & Conditions</label>
                                    <textarea></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Privacy Policy</label>
                                    <textarea></textarea>
                                </div>
                            </form>
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
