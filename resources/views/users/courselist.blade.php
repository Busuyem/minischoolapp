@extends('layouts.userlay')

@section('title', "User Dashboard")
    
@section('content')
 <div class="row">
        <div class="col-md-8">
          <div class="card">
            @include('inc.message')
            <div class="card-header">
              <h4 class="card-title">Your Registered Course(s) Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Course Code
                    </th>
                    <th>
                      Lecturer
                    </th>
                    <th>
                      Semester
                    </th>
                    <th>
                      Unit(s)
                    </th>
                    <th class="text-right">
                      Action
                    </th>
                  </thead>

                  @foreach ($courseLists as $course)
                      
                  
                  <tbody>
                    <tr>
                      <td>
                       {{$course->course}}
                      </td>
                      <td>
                        {{$course->lecturer}}
                      </td>
                      <td>
                        {{$course->semester}}
                      </td>
                      <td>
                        {{$course->unit}}
                      </td>
                      <td class="text-right">

                        <div class="d-flex flex-row float-right">

                        <a href="{{route('course.edit', $course)}}" class="btn-sm btn btn-info text-white"><i class="fas fa-edit"></i></a>
    
                        <form action="{{route('course.update', $course)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="ml-1 bg-white text-danger"><i class="fas fa-trash-alt"></i></button>
    
                          </form>
    
                        </div>
                      </td>
                    </tr>
                      
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
          <div>
          <a href="{{route('user.dashboard')}}" class="btn btn-primary"><b>Register another course</b></a>

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

              {{--
                Playholder Image to replace Heroku Image Uploading failure
                <img class="avatar border-gray" src="{{asset('/assets/img/mike.jpg')}}" alt="...">
                --}}


              
              @if(auth()->user()->image)

              <img class="avatar border-gray" src="{{asset('storage/'.auth()->user()->image)}}" alt="...">

              @else

              <img class="avatar border-gray" src="{{asset('/assets/img/mike.jpg')}}" alt="...">

              @endif

             

              <h5 class="title">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h5>
            </a>
            <p class="description">
             <b>Registration No: 2020/{{auth()->user()->code}}</b> 
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