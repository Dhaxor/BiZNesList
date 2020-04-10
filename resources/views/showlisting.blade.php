@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">{{$listing->name}}<a href="/listings" class="btn btn-success btn-sm " style="float:right;">Go Back</a></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                <li class="list-group-item text-danger">{{$listing->address}}</li>
                    <li class="list-group-item text-primary">{{$listing->website}}</li>
                    <li class="list-group-item text-info">{{$listing->email}}</li>
                    <li class="list-group-item text-success">{{$listing->phone}}</li>
                </ul>


            </div>
        </div>
    </div>
</div>

@endsection
