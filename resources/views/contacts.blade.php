@extends('layouts.default')

@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">View Contacts</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address 1</th>
                        <th scope="col">Address 2</th>
                        <th scope="col">City</th>
                        <th scope="col">County</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <form method="POST" action="/contacts/{{ $contact->id }}">
                            @csrf
                            @method('DELETE')
                        <tr>
                            <td>{{ $contact->firstname }} {{ $contact->lastname }}</td>
                            <td>{{ $contact->dob }}</td>
                            <td>{{ $contact->gender }}</td>
                            <td>{{ $contact->telephone }}</td>
                            <td>{{ $contact->address1 }}</td>
                            <td>{{ $contact->address2 }}</td>
                            <td>{{ $contact->city }}</td>
                            <td>{{ $contact->county }}</td>
                            <td>{{ $contact->postcode }}</td>
                            <td>
                                <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                                <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <a href="/contacts/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Contact</a>
                <a href="/" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>

    </main>
@endsection
