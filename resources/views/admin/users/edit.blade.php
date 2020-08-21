@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edit User {{$user->name}}</div>
                <div class="card-body">
                <form  action="{{route('admin.users.update',$user)}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right">E-mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{method_field('PUT')}}
                <div class="form-group row">
                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                    <div class="col-md-4">
                @foreach ($roles as $role)
                    <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{$role->id}}"
                    @if($user->roles->pluck('id')->contains($role->id))checked @endif
                    >
                    <label>{{$role->name}}</label>
                    </div>

                @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-warning col-md-6 ">UPDATE</button>
                </form>




        </div>


            </div>
        </div>
    </div>
</div>
@endsection
