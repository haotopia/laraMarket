@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Good /
                    @if($good->id)
                        Edit #{{$good->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($good->id)
                    <form action="{{ route('goods.update', $good->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('goods.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="market_id-field">Market_id</label>
                    <input class="form-control" type="text" name="market_id" id="market_id-field" value="{{ old('market_id', $good->market_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $good->name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="price-field">Price</label>
                    <input class="form-control" type="text" name="price" id="price-field" value="{{ old('price', $good->price ) }}" />
                </div> 
                <div class="form-group">
                    <label for="quntity-field">Quntity</label>
                    <input class="form-control" type="text" name="quntity" id="quntity-field" value="{{ old('quntity', $good->quntity ) }}" />
                </div> 
                <div class="form-group">
                	<label for="abstract-field">Abstract</label>
                	<input class="form-control" type="text" name="abstract" id="abstract-field" value="{{ old('abstract', $good->abstract ) }}" />
                </div> 
                <div class="form-group">
                	<label for="img-field">Img</label>
                	<input class="form-control" type="text" name="img" id="img-field" value="{{ old('img', $good->img ) }}" />
                </div> 
                <div class="form-group">
                	<label for="address-field">Address</label>
                	<input class="form-control" type="text" name="address" id="address-field" value="{{ old('address', $good->address ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('goods.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection