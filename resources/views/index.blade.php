@extends('layouts.default')

@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to PHP Laravel Assessment</h1>
            <p class="lead">This is a simple CRUD application to manage contacts.</p>
            <hr class="my-4">
            <p>Please select from the following options :-</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ url('/contacts/') }}" role="button"><i class="fas fa-search"></i> View Contacts</a>
                <a class="btn btn-success btn-lg" href="{{ url('/contacts/create') }}" role="button"><i class="fas fa-plus"></i> Add New Contact</a>
            </p>
        </div>
    </main>
@endsection
