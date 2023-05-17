@extends('layouts.cust')

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                @foreach ($customer as $c)
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $c->custName }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $c->custPhone }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $c->custAddress }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $c->custEmail }}
                        </div>
                    </div>
                </div>
                <a class="mt-5 text-center"></a>
                <a class="btn btn-primary profile-button"  href="{{ route('customer.edit',$c->id) }}">Update Profile</button></a>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection