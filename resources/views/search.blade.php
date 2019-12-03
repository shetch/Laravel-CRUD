@extends('layouts.default')

@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">Search Results for {{ $keywords }}</h1>

            @if(!$results->isEmpty())
            {{--@if($results->count() > 0)--}}
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
                    @foreach($results as $result)
                        <form method="POST" action="/contacts/{{ $result->id }}">
                            @csrf
                            @method('DELETE')
                            <tr>
                                <td>{{ $result->firstname }} {{ $result->lastname }}</td>
                                <td>{{ $result->dob }}</td>
                                <td>{{ $result->gender }}</td>
                                <td>{{ $result->telephone }}</td>
                                <td>{{ $result->address1 }}</td>
                                <td>{{ $result->address2 }}</td>
                                <td>{{ $result->city }}</td>
                                <td>{{ $result->county }}</td>
                                <td>{{ $result->postcode }}</td>
                                <td>
                                    <a href="/contacts/{{ $result->id }}/edit" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h5>Sorry, there is nothing that matches your search, please try again.</h5>
            @endif
        </div>
    </main>
@endsection
