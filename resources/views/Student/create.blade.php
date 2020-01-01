@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="{{ route ('student.store')}}" enctype = "multipart/form-data">

                    @csrf
                    <fieldset>
                    
                    <!-- Form Name -->
                    <legend>Student Form</legend>

                    
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="student_name">Student Name</label>  
                      <div class="col-md-4">
                      <input id="student_name" name="student_name" type="text" placeholder="Student Name" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="student_mykad">Student Mycard</label>  
                      <div class="col-md-4">
                      <input id="student_mykad" name="student_mykad" type="" placeholder="My Card" class="form-control input-md" required="">
                        
                      </div>
                    </div>
                  
                    
      
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="status">Status</label>
                      <div class="col-md-4">
                        <select id="status" name="student_gender" class="form-control">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for=""></label>
                      <div class="col-md-8">
                        <button id="" name="" class="btn btn-success">Save</button>
                        <button type="button" id="" name="" class="btn btn-danger" onclick= "window.location.href = '{{ route('student.index') }}' " >Cancel</button>
                      </div>
                    </div>
                    
                    </fieldset>
                    </form>
                    
                        
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
