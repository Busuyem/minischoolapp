@extends('layouts.master')

@section('title', "School System")
    
@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Reg No:
                </th>
                <th>
                  E-mail Address
                </th>

                <th>
                  Department
              </th>

                <th>
                    Registered Course(s)
                </th>
                <th class="text-right">
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($users as $user)
                    
                
                <tr>
                  <td>
                    {{$user->first_name}} {{$user->last_name}}
                  </td>
                  <td>
                    2020/{{$user->code}}
                  </td>
                  <td>
                    {{$user->email}}
                   
                  </td>

                  <td>
                    {{$user->course}}
                   
                  </td>

                  <td>
                    @foreach($user->courses as $course)
                      {{$course->course}}
                    @endforeach
                  </td>

                  <td>
                   
                    
                  </td>

                  <td class="text-right">

                    <div class="d-flex flex-row float-right">

                      <a href="" class="btn btn-info">Edit</a>

                      <form action="" method="post">

                        <button class="btn btn-danger ml-1">Delete</button>

                      </form>

                    </div>
                     


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection