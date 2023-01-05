@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add New Documents</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
              </div>
              <div class="form-group col-md-6">
                <label for="size">Size</label>
                <input type="number" class="form-control" id="size" name="size" required>
              </div>
            </div>
            <div class="form-group">
              <label>File</label>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
            </div>
            <button class="btn btn-primary col-sm" type="submit">Submit form</button>
          </form>
        </div>
    </div>
@endsection