@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Dashboard
                <a href="/listings/create" class="btn btn-success btn-xs float-right">Add listing</a>
            </div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <h3>Your Listings</h3>
                @if (count($listings) > 0)
                <table class="table table-stiped">
                    <tr>
                        <th>Company</th>
                        <th></th>
                        <th></th>

                    </tr>
                    @foreach ($listings as $listing)
                    <tr>
                        <td>{{$listing->name}}</td>
                        <td>
                            <a href="/listings/{{$listing->id}}/edit" class="btn btn-default float-right">
                                Edit
                            </a>
                        </td>
                        <td>
                            {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], '', 'class' => 'float-right', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                {{ Form::hidden('_method', 'delete')}}
                                {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection