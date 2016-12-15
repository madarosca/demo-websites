@extends('layouts.master')
@section('title', 'Trisq View Business Components')

@section('content')
<div class="page-content-wrapper col-md-12">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="page-content inset" id="container">
        <div class="row">
            <div class="container-fluid col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-cogs" aria-hidden="true"></i> Business Components</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active">
                            <a href="#bc_overview" aria-controls="bc_overview" role="tab" data-toggle="tab"><i class="fa fa-eye" aria-hidden="true"></i> Overview</a>
                          </li>
                          <li role="presentation">
                            <a href="/business_components/add"><i class="fa fa-plus-square" aria-hidden="true"></i> Add business component</a>
                          </li>
                        </ul>
                        @if ($business_components->isEmpty())
                            <div class="panel-body"><h4>There are no business components added!</h4></div>
                        @else
                        <div class="tab-content">
                         <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane active" id="bc_overview">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($business_components as $bc)
                                    <tr>
                                        <td>{{ $bc->name }}</td>
                                        <td>{{ $bc->category }}</td>
                                        <td>{{ $bc->description }}</td>
                                        <td class="td_buttons">
                                            <a class="btn btn-default gradient btn-xs" href="/business_components/edit/{{ $bc->id }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        </td>
                                        <td class="td_buttons">
                                            <!-- Button trigger modal -->
                                             <button type="button" class="btn btn-danger gradient btn-xs" data-toggle="modal" data-target="#myModal" id="{{$bc->id}}"><span class="glyphicon glyphicon-remove"></span> Delete
                                            </button>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <p class="text-danger"><span class="glyphicon glyphicon-warning-sign"></span> Warning!</p>
                                                  </div>
                                                  <div class="modal-body">
                                                    <h4>Are you sure you want to delete this business component?</h4>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <a href="/business_component/{{ $bc->id }}/delete" type="button" class="btn btn-danger gradient btn-sm">Delete</a>
                                                    <button type="button" class="btn btn-primary gradient btn-sm" data-dismiss="modal">Cancel</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div><!-- end modal -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        {{ $business_components->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection