@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Payment /
                    @if($payment->id)
                        Edit #{{$payment->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($payment->id)
                    <form action="{{ route('payments.update', $payment->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('payments.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="openId-field">OpenId</label>
                	<input class="form-control" type="text" name="openId" id="openId-field" value="{{ old('openId', $payment->openId ) }}" />
                </div> 
                <div class="form-group">
                    <label for="ads_id-field">Ads_id</label>
                    <input class="form-control" type="text" name="ads_id" id="ads_id-field" value="{{ old('ads_id', $payment->ads_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="list_id-field">List_id</label>
                    <input class="form-control" type="text" name="list_id" id="list_id-field" value="{{ old('list_id', $payment->list_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="status-field">Status</label>
                    <input class="form-control" type="text" name="status" id="status-field" value="{{ old('status', $payment->status ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('payments.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection