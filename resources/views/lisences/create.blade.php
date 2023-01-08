@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add New Lisence</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
          <form action="{{ route('lisences.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="software_name">Software Name</label>
              <input type="text" class="form-control @error('software_name') is-invalid @enderror" id="software_name" name="software_name">
              @error('software_name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="product_key">Product Key</label>
              <input type="text" class="form-control @error('product_key') is-invalid @enderror" id="product_key" name="product_key">
              @error('product_key')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="category">Category</label>
                <select id="category" class="form-control @error('category') is-invalid @enderror" name="category">
                  <option selected value="">Choose...</option>
                  <option value="Graphics Software">Graphics Software</option>
                  <option value="Office Software">Office Software</option>
                </select>
                @error('category')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="supplier">Supplier</label>
                <select id="supplier" class="form-control @error('supplier') is-invalid @enderror" name="supplier">
                  <option selected value="">Choose...</option>
                  <option value="adobe">Adobe</option>
                  <option value="microsoft">Microsoft</option>
                </select>
                @error('supplier')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="licensed_to_name">Lisenced to Name</label>
                <input type="text" class="form-control @error('licensed_to_name') is-invalid @enderror" id="licensed_to_name" name="licensed_to_name">
                @error('licensed_to_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="licensed_to_email">Lisenced to Email</label>
                <input type="text" class="form-control @error('licensed_to_email') is-invalid @enderror" id="licensed_to_email" name="licensed_to_email">
                @error('licensed_to_email')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="purchase_date">Purchase Date</label>
                <input type="date" class="form-control @error('purchase_date') is-invalid @enderror" id="purchase_date" name="purchase_date">
                @error('purchase_date')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="purchase_cost">Purchase Cost</label>
                <input type="number" class="form-control @error('purchase_cost') is-invalid @enderror" id="purchase_cost" name="purchase_cost">
                @error('purchase_cost')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="expiration_date">Expiration Date</label>
                <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" name="expiration_date">
                @error('expiration_date')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="termination_date">Termination Date</label>
                <input type="date" class="form-control @error('termination_date') is-invalid @enderror" id="termination_date" name="termination_date">
                @error('termination_date')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="purchase_order_number">Purchase Order Number</label>
                <input type="number" class="form-control @error('purchase_order_number') is-invalid @enderror" id="purchase_order_number" name="purchase_order_number">
                @error('purchase_order_number')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="order_number">Order Number</label>
                <input type="number" class="form-control @error('order_number') is-invalid @enderror" id="order_number" name="order_number">
                @error('order_number')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <textarea class="form-control" name="notes" id="notes" rows="2"></textarea>
            </div>
            <button class="btn btn-primary col-sm" type="submit">Submit form</button>
          </form>
        </div>
    </div>
@endsection