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

                {!! Form::open(['action' => 'ListingsController@store']) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company name']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact email']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact phone']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Business Address']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About your business...']) }}
                    {{ Form::bsSubmit('submit') }}
                {!! Form::close() !!}
                
            </div>
        </div>
    </div>
</div>
@endsection