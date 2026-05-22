@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the table for the students
                    </div>
                    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}">
                        Add Student
                    </a>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->stud_fname }}</td>
                                        <td>{{ $student->stud_lname }}</td>
                                        <td>{{ $student->stud_mname }}</td>
                                        <td>{{ $student->stud_email }}</td>
                                        <td>{{ $student->stud_age }}</td>
                                        <td>{{ $student->stud_address }}</td>
                                        <td>{{ $student->stud_dob }}</td>
                                    
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection