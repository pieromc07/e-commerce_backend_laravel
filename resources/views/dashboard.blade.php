@extends('layout.master')

@section('plugin-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/plugin.css') }}">

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h2 class="card-title mb-0">Product Analysis</h2>
                        <div class="wrapper d-flex">
                            <div class="d-flex align-items-center mr-3">
                                <span class="dot-indicator bg-success"></span>
                                <p class="mb-0 ml-2 text-muted">Product</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="dot-indicator bg-primary"></span>
                                <p class="mb-0 ml-2 text-muted">Resources</p>
                            </div>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="dashboard-area-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('plugin-scripts')
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endsection

@section('custom-scripts')
    <script type="text/javascript">
        if ($("#dashboard-area-chart").length) {
            var lineChartCanvas = $("#dashboard-area-chart")
                .get(0)
                .getContext("2d");
            var data = {

                labels: [
                    @foreach ($data as $item)

                        "{{ $item->producto }}",

                    @endforeach
                ],
                datasets: [
                    @foreach ($data as $item)

                        {
                        label: "{{ $item->producto }}",
                        data: [

                        "{{ $item->cantidad }}",

                        ],
                        backgroundColor: "#2196f3",
                        borderColor: "#0c83e2",
                        borderWidth: 1,
                        fill: true
                        },
                    @endforeach
                ]
            };
            var options = {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 20,
                            stepSize: 10
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 2
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                stepsize: 1
            };
            var lineChart = new Chart(lineChartCanvas, {
                type: "bar",
                data: data,
                options: options
            });
        }
    </script>
@endsection
