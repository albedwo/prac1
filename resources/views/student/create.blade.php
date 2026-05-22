@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Student</h3>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="stud_fname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="stud_fname" name="stud_fname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_lname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="stud_lname" name="stud_lname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_mname" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="stud_mname" name="stud_mname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="stud_email" name="stud_email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="stud_age" name="stud_age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="stud_address" name="stud_address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stud_dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="stud_dob" name="stud_dob" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
