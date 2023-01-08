@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add New People</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
          <form action="{{ route('people.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" required>
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" required>
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required>
              @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="departmen">Department</label>
                <input type="text" class="form-control @error('departmen') is-invalid @enderror" id="departmen" name="departmen" required>
                @error('departmen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
            </div>
            <button class="btn btn-primary col-sm" type="submit">Save</button>
          </form>
        </div>
    </div>
@endsection