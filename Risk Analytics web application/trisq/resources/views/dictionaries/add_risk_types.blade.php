@extends('layouts.master')
@section('title', 'Trisq Add Risk Type')

@section('content')
<div class="page-content-wrapper col-lg-12">
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
                        <h3 class="panel-title"><i class="fa fa-plus-square" aria-hidden="true"></i> Add new record</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-lg-offset-2" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        <div class="form-group">
                            <div id="div_id_code" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_code" class="col-md-1 control-label">Code<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="code" maxlength="200" name="code" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_name" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_name" class="col-md-1 control-label">Name<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="name" maxlength="200" name="name" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_category" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_category" class="col-md-1 control-label">Category<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="category" maxlength="200" name="category" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_description" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_description" class="col-md-1 control-label">Description<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="description" maxlength="200" name="description" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_calculation_type" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_calculation_type" class="col-md-1 control-label">Calculation type<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="calculation_type" maxlength="200" name="calculation_type" required/>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3 col-lg-offset-4">
                                <a href="{{ URL::previous() }}" class="btn btn-danger gradient btn-sm pull-right"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                                <button class="btn btn-primary gradient btn-sm pull-left" type="submit"><span class="glyphicon glyphicon-ok"></span> Save</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection