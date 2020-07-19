@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header bg-info text-white text-center"><b>{{ __('2020 STUDENT REGISTRATION FORM') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">

                           <div class="col-md-6">
                                <label for="first_name"><b>First Name</b></label>
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus placeholder="Enter Your First Name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="last_name"><b>Last Name</b></label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Enter Your Last Name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="email"><b>Your Email Address</b></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="phone_number"><b>Your Phone Number</b></label>
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="Enter Your Phone Number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="password"><b>Your Password</b></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password of least 8 characters">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="password-confirm"><b>Confirm Password</b></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                            </div>
                        </div>

                          <div class="form-group row">

                            <div class="col-md-6">
                                <label for="dob"><b>Date of Birth</b></label>
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required  placeholder="Enter Your Password">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="address"><b>Residential Address</b></label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Enter Your Address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="city"><b>City of Residence</b></label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Enter Your City">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="country"><b>Country of Residence</b></label>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" placeholder="Enter Your Country">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <label for="gender"><b>Gender</b></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"  id="gridRadios1" value="male" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>

                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="course"><b>Choice Course of Study</b></label>
                                <select id="course" name="course" value="{{ old('course') }}" class="form-control @error('course') is-invalid @enderror">
                                  <option selected disabled>Select</option>
                                  <option>Medicine</option>
                                  <option>Engineering</option>
                                  <option>Arts</option>
                                  <option>Social Science</option>
                                  <option>Education</option>
                                </select>

                                @error('course')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message }}</strong>
                                </span>
                                @enderror

                              </div>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-4 ">
                                <label for="file"><b>Your Photo</b></label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                    <div class="form-group row d-flex justify-content-center align-item-center">    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <b>{{ __('Submit your form') }}</b>
                                </button>

                                
                            </div>
                        </div>

                        <div class="form-group row mb-0 ml-1">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('login')}}" class="btn btn-dark">
                                    <b>{{ __('Back to login') }}</b>
                                </a>

                                
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
