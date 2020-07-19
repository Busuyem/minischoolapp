@extends('layouts.master')

@section('title', "School System")
    
@section("content")

<div class="row">
    <div class="col-md-12">
      <div class="card">
        @include('inc.message')
        <div class="card-header">
          <h4 class="card-title">List of All the Students in the School</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  S/N
                </th>
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
                @foreach ($users as $key => $user)
                <tr>

                  <td>
                    {{$key+1}}
                  </td>

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
                      {{implode(',', $course->pluck('course')->toArray())}}
                    @endforeach
                  </td>

                  <td class="text-right">
                    <div class="">
                        <form action="{{route('user.destroy', $user)}}" method="post">
                          @method('delete')
                          @csrf
                          
                              <button class="bg-white text-danger"><i class="fas fa-trash-alt">Delete</i></button>
                           
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