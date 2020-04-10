@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!!Form::open(['action' => 'ListingsController@store', 'method' => 'POST'])!!}
                {{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
                {{Form::bsText('website', '', ['placeholder' => 'Company website'])}}
                {{Form::bsText('email', '', ['placeholder' => 'Company Email'])}}
                {{Form::bsText('phone', '', ['placeholder' => 'Company Phone'])}}
                {{Form::bsText('address', '', ['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio', '', ['placeholder' => 'About this business'])}}
                {{Form::bsSubmit('submit')}}
                {!!Form::close()!!}

            </div>
        </div>
    </div>
</div>

@endsection
