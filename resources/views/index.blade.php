@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total Data</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">Components <span
                      class="float-right">{{ count($components) }}</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: {{ 100 / (200 / count($components)) }}%"
                      aria-valuenow="{{ count($components) }}" aria-valuemin="0" aria-valuemax="{{ count($accessories) + count($components) + count($lisences) + count($people)}}"></div>
              </div>
              <h4 class="small font-weight-bold">Accessories <span
                      class="float-right">{{ count($accessories) }}</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: {{ 100 / (200 / count($accessories)) }}%"
                      aria-valuenow="{{ count($accessories) }}" aria-valuemin="0" aria-valuemax="{{ count($accessories) + count($components) + count($lisences) + count($people)}}"></div>
              </div>
              <h4 class="small font-weight-bold">Lisences <span
                      class="float-right">{{ count($lisences) }}</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar" role="progressbar" style="width: {{ 100 / (200 / count($lisences)) }}%"
                      aria-valuenow="{{ count($lisences) }}" aria-valuemin="0" aria-valuemax="{{ count($accessories) + count($components) + count($lisences) + count($people)}}"></div>
              </div>
              <h4 class="small font-weight-bold">People <span
                      class="float-right">{{ count($people) }}</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: {{ 100 / (200 / count($people)) }}%"
                      aria-valuenow="{{ count($people) }}" aria-valuemin="0" aria-valuemax="{{ count($accessories) + count($components) + count($lisences) + count($people)}}"></div>
              </div>
          </div>
      </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Comparison Data</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                      <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                      <span class="mr-2">
                          <i class="fas fa-circle text-primary"></i> Components
                      </span>
                      <span class="mr-2">
                          <i class="fas fa-circle text-success"></i> Accessories
                      </span>
                      <span class="mr-2">
                          <i class="fas fa-circle text-info"></i> Lisences
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-warning"></i> People
                    </span>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@push('js')
  <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
  <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Components", "Accessories", "Lisences", "People"],
    datasets: [{
      data: [{{ count($components) }}, {{ count($accessories) }}, {{ count($lisences) }}, {{ count($people) }}],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffc107'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

  </script>
@endpush