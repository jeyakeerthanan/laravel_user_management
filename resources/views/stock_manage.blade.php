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
                    <th scope="col">item name</th>
                    <th scope="col">initail quantity</th>
                    <th scope="col" >balance quantity</th>

                    <th scope="col" style="left:30px">Handle the item</th>
                  </tr>
                </thead>
                <tbody>

                     <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>

                        <div class="btn-group" role="group" aria-label="Button group example">

                     <td> <a href=""><button type="button" class=" btn btn-outline-warning ">order request</button></a>


                            <button type="submit" class="btn btn-outline-danger">remove</button></div>


                        </td>
                      </tr>


                </tbody>
              </table>



        </div>


            </div>
        </div>
    </div>
</div>
@endsection
