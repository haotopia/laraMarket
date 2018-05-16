@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Good / Show #{{ $good->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('goods.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('goods.edit', $good->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Market_id</label>
<p>
	{{ $good->market_id }}
</p> <label>Name</label>
<p>
	{{ $good->name }}
</p> <label>Price</label>
<p>
	{{ $good->price }}
</p> <label>Quntity</label>
<p>
	{{ $good->quntity }}
</p> <label>Abstract</label>
<p>
	{{ $good->abstract }}
</p> <label>Img</label>
<p>
	{{ $good->img }}
</p> <label>Address</label>
<p>
	{{ $good->address }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
