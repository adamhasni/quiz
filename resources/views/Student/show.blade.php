@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Details</div>
                

                <div class="card-body">
                        <div class ="float-right">
                                <a class = "btn btn-danger" href ="{{ route('student.index')}}">Back</a>
                                
                                </div>
                        <table class="table table-striped table-bordered">
                                <tr>
                                  <td>Student Name</td>
                                <td>{{$student->student_name}}</td>
                                </tr>
                                <tr>
                                  <td>Student My Card</td>
                                <td>{{$student->student_mykad}}</td>
                                </tr>
                               
                                <tr>
                                  <td>Gender</td>
                                <td>{{$student->student_gender}}</td>
                                </tr>
                              
                           
                              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection