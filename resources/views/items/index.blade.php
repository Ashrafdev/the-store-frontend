@extends('layout.app')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <section class="panel">
                    <header class="panel-heading">
                        Item Lists
                        <div class="pull-right">
                            <a href="" class="label label-info label-mini" data-toggle="modal" data-target="#addMyItems">Add</a>
                        </div>
                    </header>
                        <table v-if="myItems.data" class="table table-striped table-advance table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Name</th>
                                <th class="hidden-phone"><i class="fa fa-question"></i> Description</th>
                                <th><i class="fa fa-bookmark"></i> Price</th>
                                <th><i class="fa fa-edit"></i> Image</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(index, myitem) in myItems.data.data">
                                    <td>@{{ myitem.name }}</td>
                                    <td>@{{ myitem.description }}</td>
                                    <td>RM@{{ myitem.price }}</td>
                                    <td><span class="label label-info label-mini" data-toggle="modal" v-bind:data-target="'#viewImage-'+index">Click For View</span></td>
                                    <td>
                                        <a v-on:click="Viewitem(myitem.id, true)" class="btn btn-success btn-xs" title="View"><i class="fa fa-check"></i></a>
                                        <a v-on:click="OpenUpdateItemByUser(myitem.id)" class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#updateMyItem" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a v-on:click="DeleteItemByUser(myitem.id)" class="btn btn-danger btn-xs" title="delete" href="#">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div aria-hidden="true" aria-labelledby="viewImage" role="dialog" tabindex="-1" v-bind:id="'viewImage-'+index"
                                             class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <h4 class="modal-title">View image</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img v-bind:src="api_url+myitem.img_path" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <p v-else>No Data... You Dont Have Item</p>
                    <div aria-hidden="true" aria-labelledby="addMyItems" role="dialog" tabindex="-1" id="addMyItems"
                         class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Create New</h4>
                                </div>
                                <div class="modal-body">@include('items.create')</div>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true" aria-labelledby="updateMyItem" role="dialog" tabindex="-1" id="updateMyItem"
                         class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Update Item</h4>
                                </div>
                                <div class="modal-body">
                                    @include('items.edit')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </section>
@endsection