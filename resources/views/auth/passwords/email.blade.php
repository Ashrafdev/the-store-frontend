@extends('layout.app')
@section('content')
<section class="wrapper">
    <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="ResetPassword" accept-charset="utf-8" v-on:submit.prevent>
                        <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <span v-if="hasError" class="help-block">
                                    <strong>Invalid Email</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button v-on:click="ResetPassword" type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
