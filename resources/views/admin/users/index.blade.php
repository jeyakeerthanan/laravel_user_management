@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Managing Users</div>
                <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Role</th>
                    <th scope="col">HANDLE</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($users as $user)
                     <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>


                        @can('edit-users')
                     <td> <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-success float-left">Edit</button></a>@endcan
                        <form action="{{route('admin.users.destroy',$user)}}" method="POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            @can('delete-users')  <button type="submit" class="btn btn-danger">Delete</button>@endcan
                        </form>

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
