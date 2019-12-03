@extends('layouts.default')

@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">Add Contact</h1>
            <p>Note: All fields must be completed except Address Line 2.</p>
            <form method="POST" action="/contacts">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input name="firstname" type="text" class="form-control" placeholder="Enter firstname" value="{{ old('firstname') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input name="lastname" type="text" class="form-control" placeholder="Enter lastname" value="{{ old('lastname') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input name="dob" type="text" class="form-control" placeholder="Enter birthdate (dd/mm/yyyy)" value="{{ old('dob') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label for="">Gender</label></div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                            <label class="form-check-label">
                                Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input name="telephone" type="text" class="form-control" placeholder="Enter telephone" value="{{ old('telephone') }}">
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
                            <input name="address1" type="text" class="form-control" placeholder="Enter Address Line 1" value="{{ old('address1') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address2">Address Line 2</label>
                            <input name="address2" type="text" class="form-control" placeholder="Enter Address Line 2" value="{{ old('address2') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Town/City</label>
                            <input name="city" type="text" class="form-control" placeholder="Enter City" value="{{ old('city') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="county">County</label>
                            <input name="county" type="text" class="form-control" placeholder="Enter County" value="{{ old('county') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcode">Town/City</label>
                            <input name="postcode" type="text" class="form-control" placeholder="Enter Postcode" value="{{ old('postcode') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Save Contact</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
