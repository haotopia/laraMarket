@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Address / Show #{{ $address->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('addresses.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('addresses.edit', $address->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>OpenId</label>
<p>
	{{ $address->openId }}
</p> <label>Name</label>
<p>
	{{ $address->name }}
</p> <label>Phone</label>
<p>
	{{ $address->phone }}
</p> <label>Address</label>
<p>
	{{ $address->address }}
</p> <label>Province</label>
<p>
	{{ $address->province }}
</p> <label>City</label>
<p>
	{{ $address->city }}
</p> <label>County</label>
<p>
	{{ $address->county }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
