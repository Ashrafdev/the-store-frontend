@extends('layout.app')
@section('content')
    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <section class="panel">
                    <header class="panel-heading">
                        Post Your Items
                    </header>
                    <div class="panel-body">

                        <div class="stepy-tab">
                            <ul id="default-titles" class="stepy-titles clearfix">
                                <li id="default-title-0" class="current-step">
                                    <div>Your Item</div>
                                    <span> </span>
                                </li>
                                <li id="default-title-1" class="">
                                    <div>Register</div>
                                    <span> </span>
                                </li>
                            </ul>

                        </div>
                        <form class="form-horizontal" id="ItemWithRegisterUser" enctype="multipart/form-data" accept-charset="UTF-8" v-on:submit.prevent>

                            <fieldset title="Step1" class="step" id="default-step-0" style="display: block;">
                                <legend>Item Details</legend>
                                <!-- Name Field -->
                                <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                                    <label class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="item_name" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>

                                <!-- Description Field -->
                                <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                                    <label class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" name="item_description" class="form-control" placeholder="Description" required></textarea>
                                    </div>
                                </div>

                                <!-- Price Field -->
                                <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                                    <label class="col-lg-2 control-label">Price</label>
                                    <div class="col-lg-10 input-group">
                                        <span class="input-group-addon">RM</span>
                                        <input type="number" name="item_price" class="form-control" placeholder="Price" required>
                                    </div>
                                </div>

                                <!-- Img  -->
                                <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                                    <label class="col-lg-2 control-label">Image</label>
                                    <div class="col-lg-4">
                                        <input type="file" name="item_image" class="form-control-file btn btn-white btn-file" placeholder="" required>
                                    </div>
                                </div>

                                <!-- Item Categories Id Field -->
                                <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
                                    <label class="col-lg-2 control-label">Item Categories</label>
                                    <div class="col-lg-10">
                                        <select name="item_categories_id" class="form-control" required>
                                            <option value="1">Watchs</option>
                                            <option value="2">Watchs</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset title="Step 2" class="step" id="default-step-1" style="display: none;">
                                <legend>My Details</legend>
                                @include('auth.register_step')
                                <button v-if="hasError" v-on:click="PostItemWithSignup" type="submit" id="defaults-next-0" class="button-next  btn btn-info">SUBMIT</button>
                                <span class="button-next" v-else><strong>Please Fill All Form.</strong></span>
                            </fieldset>

                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
    @push('scripts')
    <script>
        jQuery(document).ready(function ($) {
            console.log(1);
            $('#defaults').stepy({
                backLabel: 'Previous',
                block: true,
                nextLabel: 'Next',
                titleClick: true,
                titleTarget: '.stepy-tab'
            });
        })
    </script>
    @endpush
@endsection