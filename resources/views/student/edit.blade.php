@extends('layouts.app')

@section('content')

   <form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="stud_fname" name="stud_fname" value="{{ $student->stud_fname }}" required>
    </div>

     <div class="mb-3">
        <label for="name" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="stud_mname" name="stud_mname" value="{{ $student->stud_mname }}" required>
    </div>

     <div class="mb-3">
        <label for="name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="stud_lname" name="stud_lname" value="{{ $student->stud_lname }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="stud_email" name="stud_email" value="{{ $student->stud_email }}" required>
    </div>
   
      <div class="mb-3">
        <label for="email" class="form-label">Age</label>
        <input type="number" class="form-control" id="stud_age" name="stud_age" value="{{ $student->stud_age }}" required>
    </div>

      <div class="mb-3">
        <label for="email" class="form-label">Address</label>
        <input type="text" class="form-control" id="stud_address" name="stud_address" value="{{ $student->stud_address }}" required>
    </div>

      <div class="mb-3">
        <label for="email" class="form-label">DOB</label>
        <input type="date" class="form-control" id="stud_dob" name="stud_dob" value="{{ $student->stud_dob }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection