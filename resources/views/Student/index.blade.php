@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Home</div>
                

                    <div class="card-body">
                        <div class ="float-right">
                            
                            <a class = "btn btn-success" href ="{{ route('student.create')}}">Create New Level</a>
                                
                        </div>
                    <table class="table table-striped table-bordered">
                        <tr>
                          <th>No.</th>
                          <th>Student Name</th>
                          <th>My Card</th>
                          <th>Gender</th>
                          <th>Action</th>
                          
                        </tr>
                        @foreach ($student as $each_student)

                            <tr>
                                <td>{{ ++$i }}</td>
                                <td class ="item_name" >{{$each_student->student_name }}</td>
                                <td>{{$each_student->student_mykad}}</td>
                                <td>
                                    @if($each_student->student_gender == 'M')
                                    Lelaki
        
                                    @else
                                    perempuan
        
                                    @endif
                                </td>
                                <td>
                                    <a href = "{{route('student.show', $each_student->student_id)}}">Show | </a>
                                    <a href = "{{route('student.edit', $each_student->student_id)}}">Edit</a>
                                    <form class="delete_item" action="{{ route('student.destroy', $each_student->student_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                         
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".delete_item").on('submit', function(e){
                var index = $('.delete_item').index(this);
                var item_name = $(".item_name:eq("+index+")").text();
            
                return confirm('Are you sure you want to delete "'+ item_name +'"?');
            });
        });

        var token = "{{ csrf_token()}}";

        $('.btn_show_data').on('click',function())
    </script>
@endsection