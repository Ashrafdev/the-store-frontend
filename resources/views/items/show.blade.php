@extends('layout.app')
@section('content')
    <div class="wrapper">
        <div class="col-md-8 col-md-offset-2">
            <section class="panel">
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="pro-img-details">
                            <img v-bind:src="api_url+ViewItemById.data.img_path" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            <a href="#" class="">
                                @{{ ViewItemById.data.name }}
                            </a>
                        </h4>
                        <p>
                            @{{ ViewItemById.data.description }}
                        </p>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#"> all</a></span>
                            <span class="tagged_as"><strong>Tags:</strong><a rel="tag" href="#"> all</a>.</span>
                        </div>
                        <div class="m-bot15"><strong>Price : </strong>
                            <span class="pro-price"> RM @{{ ViewItemById.data.price }} </span>
                        </div>
                        <div class="form-group">
                            <p>
                                Contact Seller: @{{ ViewItemById.data.users.mobile }}
                            </p>
                            <p>
                                <a v-bind:href="'mailto:'+ViewItemById.data.users.email" class="btn btn-round btn-danger" target="_blank">
                                    <i class="icon-shopping-cart"></i> Email Seller
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection