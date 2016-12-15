@extends('layouts.master')
@section('title', 'Trisq View Risk Types')

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
                        <h3 class="panel-title"><i class="fa fa-th-large" aria-hidden="true"></i> Risk Types</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active">
                            <a href="#risk_types_overview" aria-controls="risk_types_overview" role="tab" data-toggle="tab"><i class="fa fa-eye" aria-hidden="true"></i> Overview</a>
                          </li>
                          <li role="presentation">
                            <a href="/risk_types/add"><i class="fa fa-plus-square" aria-hidden="true"></i> Add risk type</a>
                          </li>
                        </ul>
                        @if ($risk_types->isEmpty())
                            <div class="panel-body"><h4>There are no risk types added!</h4></div>
                        @else
                        <div class="tab-content">
                         <!-- Tab panes -->
                        <div role="tabpanel" class="tab-pane active" id="risk_types_overview">
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
                                @foreach($risk_types as $risk_type)
                                    <tr>
                                        <td>{{ $risk_type->name }}</td>
                                        <td>{{ $risk_type->category }}</td>
                                        <td>{{ $risk_type->description }}</td>
                                        <td class="td_buttons">
                                            <a class="btn btn-default gradient btn-xs" href="/risk_types/edit/{{ $risk_type->id }}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        </td>
                                        <td class="td_buttons">
                                            <!-- Button trigger modal -->
                                             <button type="button" class="btn btn-danger gradient btn-xs" data-toggle="modal" data-target="#myModal" id="{{$risk_type->id}}"><span class="glyphicon glyphicon-remove"></span> Delete
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
                                                    <h4>Are you sure you want to delete this risk type?</h4>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <a href="/risk_type/{{ $risk_type->id }}/delete" type="button" class="btn btn-danger gradient btn-sm">Delete</a>
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
                        {{ $risk_types->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection