@extends('layouts.default')

@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">Edit Contact</h1>
            <p>Note: All fields must be completed except Address Line 2.</p>
            <form method="POST" action="/contacts/{{ $contact->id }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input name="firstname" type="text" class="form-control" placeholder="Enter firstname" value="{{ $contact->firstname }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input name="lastname" type="text" class="form-control" placeholder="Enter lastname" value="{{ $contact->lastname }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input name="dob" type="text" class="form-control" placeholder="Enter birthdate (dd/mm/yyyy)" value="{{ $contact->dob }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label for="">Gender</label></div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Male" {{ old('gender', $contact->gender) === 'Male' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Female" {{ old('gender', $contact->gender) === 'Female' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input name="telephone" type="text" class="form-control" placeholder="Enter telephone" value="{{ $contact->telephone }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4>Address Details</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address1">Address Line 1</label>
                            <input name="address1" type="text" class="form-control" placeholder="Enter Address Line 1" value="{{ $contact->address1 }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address2">Address Line 2</label>
                            <input name="address2" type="text" class="form-control" placeholder="Enter Address Line 2" value="{{ $contact->address2 }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Town/City</label>
                            <input name="city" type="text" class="form-control" placeholder="Enter City" value="{{ $contact->city }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="county">County</label>
                            <input name="county" type="text" class="form-control" placeholder="Enter County" value="{{ $contact->county }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input name="postcode" type="text" class="form-control" placeholder="Enter Postcode" value="{{ $contact->postcode }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
@endsection
