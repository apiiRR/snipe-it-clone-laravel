@push('css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Lisences</h1>
      <a href="{{ route('lisences.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-plus-circle text-white-50"></i> Add New</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Software Name</th>
                            <th>Category</th>
                            <th>Product Key</th>
                            <th>Lisenced to Name</th>
                            <th>Lisenced to Email</th>
                            <th>Supplier</th>
                            <th>Order Number</th>
                            <th>Purchase Cost</th>
                            <th>Purchase Date</th>
                            <th>Expiration Date</th>
                            <th>Termination Date</th>
                            <th>Purchase Order Number</th>
                            <th>Notes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($datas as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->software_name }}</td>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->product_key }}</td>
                        <td>{{ $data->licensed_to_name }}</td>
                        <td>{{ $data->licensed_to_email }}</td>
                        <td>{{ $data->supplier }}</td>
                        <td>{{ $data->order_number }}</td>
                        <td>{{ $data->purchase_cost }}</td>
                        <td>{{ $data->purchase_date }}</td>
                        <td>{{ $data->expiration_date }}</td>
                        <td>{{ $data->termination_date }}</td>
                        <td>{{ $data->purchase_order_number }}</td>
                        <td>{{ $data->notes }}</td>
                        <td class="d-flex justify-content-center">
                          <form id="delete" action="{{ route('lisences.destroy', ['lisence' => $data->id]) }}"
                              method="POST">
                              @csrf
                              @method('DELETE')
                              <button onclick="if (confirm('Apakah anda yakin menghapus data ini?') == false) {
                                  return false;
                              }" type="submit" class="btn btn-danger"><i
                                      class="fas fa-trash text-white"></i></button>
                          </form>
                      </td>
                    </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
  <!-- Page level plugins -->
  <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    
  <!-- Page level custom scripts -->
  <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endpush