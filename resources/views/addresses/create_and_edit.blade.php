@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Address /
                    @if($address->id)
                        Edit #{{$address->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($address->id)
                    <form action="{{ route('addresses.update', $address->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('addresses.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="openId-field">OpenId</label>
                	<input class="form-control" type="text" name="openId" id="openId-field" value="{{ old('openId', $address->openId ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $address->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="phone-field">Phone</label>
                	<input class="form-control" type="text" name="phone" id="phone-field" value="{{ old('phone', $address->phone ) }}" />
                </div> 
                <div class="form-group">
                	<label for="address-field">Address</label>
                	<input class="form-control" type="text" name="address" id="address-field" value="{{ old('address', $address->address ) }}" />
                </div> 
                <div class="form-group">
                	<label for="province-field">Province</label>
                	<input class="form-control" type="text" name="province" id="province-field" value="{{ old('province', $address->province ) }}" />
                </div> 
                <div class="form-group">
                	<label for="city-field">City</label>
                	<input class="form-control" type="text" name="city" id="city-field" value="{{ old('city', $address->city ) }}" />
                </div> 
                <div class="form-group">
                	<label for="county-field">County</label>
                	<input class="form-control" type="text" name="county" id="county-field" value="{{ old('county', $address->county ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('addresses.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection