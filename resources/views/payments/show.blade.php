@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Payment / Show #{{ $payment->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('payments.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('payments.edit', $payment->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>OpenId</label>
<p>
	{{ $payment->openId }}
</p> <label>Ads_id</label>
<p>
	{{ $payment->ads_id }}
</p> <label>List_id</label>
<p>
	{{ $payment->list_id }}
</p> <label>Status</label>
<p>
	{{ $payment->status }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
