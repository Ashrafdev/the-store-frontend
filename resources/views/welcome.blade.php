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
@endsection