@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Store /
                    @if($store->id)
                        Edit #{{$store->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($store->id)
                    <form action="{{ route('stores.update', $store->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('stores.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="id-field">Id</label>
                    <input class="form-control" type="text" name="id" id="id-field" value="{{ old('id', $store->id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="openId-field">OpenId</label>
                	<input class="form-control" type="text" name="openId" id="openId-field" value="{{ old('openId', $store->openId ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $store->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="abstract-field">Abstract</label>
                	<input class="form-control" type="text" name="abstract" id="abstract-field" value="{{ old('abstract', $store->abstract ) }}" />
                </div> 
                <div class="form-group">
                	<label for="img-field">Img</label>
                	<input class="form-control" type="text" name="img" id="img-field" value="{{ old('img', $store->img ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('stores.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection