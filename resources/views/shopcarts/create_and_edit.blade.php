@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Shopcart /
                    @if($shopcart->id)
                        Edit #{{$shopcart->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($shopcart->id)
                    <form action="{{ route('shopcarts.update', $shopcart->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('shopcarts.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="goods_id-field">Goods_id</label>
                	<input class="form-control" type="text" name="goods_id" id="goods_id-field" value="{{ old('goods_id', $shopcart->goods_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="openId-field">OpenId</label>
                	<input class="form-control" type="text" name="openId" id="openId-field" value="{{ old('openId', $shopcart->openId ) }}" />
                </div> 
                <div class="form-group">
                    <label for="quntity-field">Quntity</label>
                    <input class="form-control" type="text" name="quntity" id="quntity-field" value="{{ old('quntity', $shopcart->quntity ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('shopcarts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection