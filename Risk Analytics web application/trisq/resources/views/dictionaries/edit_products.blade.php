@extends('layouts.master')
@section('title', 'Trisq Edit Product')

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
                        <h3 class="panel-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit record</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-lg-offset-2" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        <div class="form-group">
                            <div id="div_id_name" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_name" class="col-md-1 control-label">Name<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="name" maxlength="200" name="name" value="{{ $product->name }}" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_category" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_category" class="col-md-1 control-label">Category<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="category" maxlength="200" name="category" value="{{ $product->category }}" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_description" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_description" class="col-md-1 control-label">Description<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control textinput" id="description" maxlength="200" name="description" value="{{ $product->description }}" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_volume" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_volume" class="col-md-1 control-label">Volume<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="number" class="numberinput" id="volume" step="0.01" name="volume" value="{{ $product->volume }}" required/>
                                </div>
                            </div>
                            </div>
                            <div id="div_id_vbw" class="form-group col-lg-12">
                            <div class="form-group">
                                <label for="id_vbw" class="col-md-1 control-label">Vbw<span class="asteriskField">*</span></label>
                                <div class="col-lg-8">
                                    <input type="number" class="numberinput" id="vbw" step="0.01" name="vbw" value="{{ $product->vbw }}" required/>
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