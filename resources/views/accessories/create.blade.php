@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add New Accessories</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
          <form action="{{ route('accessories.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="accessory_name">Accessory Name</label>
              <input type="text" class="form-control @error('accessory_name') is-invalid @enderror" id="accessory_name" name="accessory_name">
              @error('accessory_name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="category">Category</label>
                <select id="category" class="form-control @error('category') is-invalid @enderror" name="category">
                  <option selected value="">Choose...</option>
                  <option value="keyboard">Keyboard</option>
                  <option value="mouse">Mouse</option>
                </select>
                @error('category')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity">
                @error('quantity')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="model_number">Model Number</label>
                <input type="number" class="form-control @error('model_number') is-invalid @enderror" id="model_number" name="model_number">
                @error('model_number')
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
                <input type="number" class="form-control @error('purchase_date') is-invalid @enderror" id="purchase_cost" name="purchase_date">
                @error('purchase_date')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <textarea class="form-control" name="notes" id="notes" rows="2"></textarea>
            </div>
            <button class="btn btn-primary col-sm" type="submit">Save</button>
          </form>
        </div>
    </div>
@endsection