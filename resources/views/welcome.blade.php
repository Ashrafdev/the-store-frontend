@extends('layout.app')
@section('content')
@push('style')
<style>
    .staggered-transition {
        transition: all .5s ease;
        overflow: hidden;
        margin: 0;
        height: 100%;
    }
    .staggered-enter, .staggered-leave {
        opacity: 0;
        height: 0;
    }
</style>
@endpush
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-3">
                <section class="panel">
                    <div class="panel-body">
                        <input v-model="searchKeyword" type="text" placeholder="Keyword Search" class="form-control">
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading">Category</header>
                    <div class="panel-body">
                        <ul class="nav prod-cat">
                            <li><a href="#"><i class=" icon-angle-right"></i>All</a></li>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="col-md-9">
                <section class="panel">
                    <div class="panel-body">

                        <div class="pro-sort">
                            <label class="pro-lab">Show</label>
                            <select v-model="ShowPerPage" class="styled hasCustomSelect"
                                    style="-webkit-appearance: menulist-button; width: 119px; position: absolute; opacity: 0; height: 39px; font-size: 12px;">
                                <option value="12">Result Per Page</option>
                                <option value="2">2 Per Page</option>
                                <option value="4">4 Per Page</option>
                                <option value="6">6 Per Page</option>
                                <option value="8">8 Per Page</option>
                                <option value="10">10 Per Page</option>
                            </select>
                            <span class="customSelect styled" style="display: inline-block;">
                                <span class="customSelectInner" style="width: 97px; display: inline-block;">Result Per Page</span>
                            </span>
                        </div>

                        <div class="pull-right" v-if="items.last_page!==1">
                            <ul class="pagination pagination-sm pro-page-list">
                                <li v-for="(n, index) in items.last_page">
                                    <a href="javascript:void(0)" v-on:click="getHomePage(n)">@{{ n }}</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </section>

                <div class="row product-list">

                    <div class="col-md-4" v-for="item in items.data | filterBy searchKeyword in 'name' | limit ShowPerPage"
                         transition="staggered"
                         stagger="100">
                        <section class="panel">
                            <div class="pro-img-box">
                                <img v-bind:src="api_url+item.img_path" alt="" width="312px" height="248px">
                                <a href="#" v-on:click="Viewitem(item.id, true)" class="adtocart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="panel-body text-center">
                                <h4>
                                    <a href="#" v-on:click="Viewitem(item.id, true)" class="pro-title">
                                        @{{ item.name }}
                                    </a>
                                </h4>
                                <p class="price">RM@{{ item.price }}</p>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
        <!-- page end-->
    </section>
    <div class="panel-body">
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-login"
             class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Login Form</h4>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent class="form-horizontal" role="form" id="signUpForm">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="email" name="email" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="password" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" v-model="remember" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button v-on:click="Login" type="submit" class="btn btn-primary">Login</button>
                                    <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-signup"
             class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" method="POST" action="http://localhost:8081/register"
                              accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="lQ4J7EIOxQX5nM5t5L3kcSU69mpy7WfQtHXTR4eW">

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control" name="dob" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">

                                    <select name="country" id="country" class="form-control" required>
                                        <option value="MY">Malaysia</option>
                                        <option value="TH">Thailand</option>
                                        <option value="VT">Vietnam</option>
                                        <option value="BRN">Brunei</option>
                                        <option value="ID">Indonesia</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Mobile</label>

                                <div class="col-md-6">
                                    <input type="number" name="mobile" id="mobile" class="form-control" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection