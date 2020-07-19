@extends('layouts.userlay')

@section('title', "User Dashboard")
    
@section('content')
<div class="row">
    <div class="col-md-8">
      <div class="card">
        @include('inc.message')
        <div class="card-header">
          <h5 class="title">Course Registration Form</h5>
        </div>
        <div class="card-body">
        <form method="POST" action="{{route('course.update', $course)}}">
          @csrf
          @method('put')

            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label for="course"><b>Choose Your Course Code</b></label>
                  <select id="course" name="course" class="form-control @error('course') is-invalid @enderror">
                  <option selected disabled>{{$course->user->course}}</option>
                    <option>MAT 101</option>
                    <option>ENG 201 </option>
                    <option>EDU 111</option>
                    <option>SOS 106</option>
                    <option>POL 205</option>
                  </select>

                  @error('course')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label><b>Registration Number</b></label>
                <input type="text" class="form-control @error('reg') is-invalid @enderror" readonly name="reg" value="2020/{{auth()->user()->code}}">

                @error('reg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>

              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1"><b>Email address</b></label>
                <input type="email" class="form-control"  name="email" readonly value="{{auth()->user()->email}}">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label><b>First Name</b></label>
                <input type="text" class="form-control" readonly name="first_name" value="{{auth()->user()->first_name}}">

                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label><b>Last Name</b></label>
                <input type="text" class="form-control" readonly name="last_name" value="{{auth()->user()->last_name}}">

                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
            </div>

                
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label><b>Department</b></label>
                <input type="text" class="form-control @error('dept') is-invalid @enderror" name="dept" placeholder="Departmet" value="{{$course->dept}}">

                @error('dept')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label><b>Course Lecturer's Name</b></label>
                  <input type="text" class="form-control @error('lecturer') is-invalid @enderror" name="lecturer" placeholder="Course Lecturer Name" value="{{ $course->lecturer}}">

                  @error('lecturer')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group"> 
                  <label><b>Course Unit(s)</b></label>
                  <input type="number" class="form-control @error('unit') is-invalid @enderror" name="unit" placeholder="Course Number of Unit(s)" min="0" max="3" value="{{$course->unit}}">

                  @error('unit')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>

                 
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label><b>Session Year</b></label>
                <input type="text" class="form-control @error('session') is-invalid @enderror" name="session" placeholder="Current Session" value="{{$course->session }}">

                @error('session')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label><b>Semester</b></label>
                  <input type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" placeholder="First or Second Semester" value="{{$course->semester}}">
                  @error('semester')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group"> 
                  <label><b>Course Attempt Status</b></label>
                  <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" placeholder="Fresher or Repeater" value="{{$course->status}}">

                  @error('status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label><b>Contact Address</b></label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"  value="{{auth()->user()->address}}">

                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label><b>City</b></label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"  value="{{auth()->user()->city}}">

                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label><b>Country</b></label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country"  placeholder="Country" value="{{auth()->user()->country}}">

                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label><b>Phone Number</b></label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"  name="phone_number" value="{{auth()->user()->phone_number}}">
                
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                </div>
              </div>
            </div>

            <div class="row  d-flex align-item-center justify-content-center">

              <button type="submit" class="btn btn-primary"><b>Update Course Registr</b></button>
            </div>
          </form>
        </div>
      </div>
    </div>

    
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="{{asset('/assets/img/bg5.jpg')}}" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="{{asset('/assets/img/mike.jpg')}}" alt="...">
              <h5 class="title">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h5>
            </a>
            <p class="description">
             <b>Matric No: 2020/{{auth()->user()->code}}</b> 
            </p>
            <p class="description">
              {{auth()->user()->phone_number}}
            </p>
          </div>
          <p class="description text-center">
            {{auth()->user()->address}}
          </p>
        </div>
        <hr>
        <div class="button-container">
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-instagram"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection