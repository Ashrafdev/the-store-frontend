@extends('layout.app')
@section('content')
    <section class="wrapper">
        {{--@include('Element.Flash.general')--}}
        {{--@include('Element.Flash.success')--}}
        {{--@include('Element.Flash.warning')--}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <section class="panel">
                    <header class="panel-heading">
                        Item Lists
                        <div class="pull-right">
                            <a href="" class="label label-info label-mini" data-toggle="modal" data-target="#addMyItems">Add</a>
                        </div>
                    </header>
                    {{--@if($items->count() > 0)--}}
                        <table class="table table-striped table-advance table-hover">
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
                            {{--@foreach($items as $key => $item)--}}
                                <tr v-for="(index, myitem) in myItems.data.data">
                                    <td>@{{ myitem.name }}</td>
                                    <td>@{{ myitem.description }}</td>
                                    <td>RM@{{ myitem.price }}</td>
                                    <td><span class="label label-info label-mini" data-toggle="modal" data-target="#viewImage-@{{ index }}">Click For View</span></td>
                                    <td>
                                        <a v-on:click="Viewitem(myitem.id, true)" class="btn btn-success btn-xs" title="View"><i class="fa fa-check"></i></a>
                                        <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#updateMyItem-@{{ index }}" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" title="delete" href="#">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div aria-hidden="true" aria-labelledby="addMyItems-@{{ index }}" role="dialog" tabindex="-1" id="addMyItems-@{{ index }}"
                                             class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <h4 class="modal-title">Create New</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{--@include('items.create')--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div aria-hidden="true" aria-labelledby="updateMyItem-@{{ index }}" role="dialog" tabindex="-1" id="updateMyItem-@{{ index }}"
                                             class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <h4 class="modal-title">Update Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{--@include('items.edit', ['id' => $item->id])--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div aria-hidden="true" aria-labelledby="viewImage-@{{ index }}" role="dialog" tabindex="-1" id="viewImage-@{{ index }}"
                                             class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <h4 class="modal-title">View Image</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img v-bind:src="api_url+myitem.img_path" width="100%" v-bind:title="myitem.name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p v-if="!myItems.data">No Data... You Dont Have Item</p>

                </section>
            </div>
        </div>

    </section>
@endsection