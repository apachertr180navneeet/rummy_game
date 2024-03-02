@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Teen Patti Table Master Edit</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row"><label for="boot_value" class="col-sm-2 col-form-label">Boot Value *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" step="0.01" value="0.50" name="boot_value" required
                                        id="boot_value" onkeyup="updateValue(this.value)">
                                </div>
                            </div>

                            <div class="form-group row"><label for="chaal_limit" class="col-sm-2 col-form-label">Chaal Limit
                                    *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" step="0.01" value="64.00" name="chaal_limit" readonly
                                        id="chaal_limit">
                                </div>
                            </div>

                            <div class="form-group row"><label for="pot_limit" class="col-sm-2 col-form-label">Pot Limit *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" min="0" step="0.01" value="512.00" name="pot_limit" readonly
                                        id="pot_limit">
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
<script>
    function updateValue(x) {
        $('#chaal_limit').val(x * 128);
        $('#pot_limit').val(x * 1024);
    }
</script>
@endsection
