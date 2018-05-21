@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Shopcart / Show #{{ $shopcart->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('shopcarts.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('shopcarts.edit', $shopcart->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Goods_id</label>
<p>
	{{ $shopcart->goods_id }}
</p> <label>OpenId</label>
<p>
	{{ $shopcart->openId }}
</p> <label>Quntity</label>
<p>
	{{ $shopcart->quntity }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
