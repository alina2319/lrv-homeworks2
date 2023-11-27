@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your profile of <b>{{ $name }}</b></div>
                    <div class="card-body">
                        ID: <b>{{ $id }}</b>
                        <br />
                        email: <b>{{ $email }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
