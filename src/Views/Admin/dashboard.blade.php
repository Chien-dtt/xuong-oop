@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>
                <a href="#" class="white_btn3">Create Report</a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-12">

            <div class="container">
                <h1>Dashboard</h1>
                <!-- Include other components and scripts here -->
        
                <!-- Example of a section where data is being rendered -->
                <div id="chart-container">
                    <canvas id="myChart"></canvas>
                </div>
                
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    // Example JavaScript code to render a chart using Chart.js
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar', // Example chart type: 'bar', 'line', etc.
                        data: {
                            labels: ['Điện thoại di động', 'Laptop'],
                            datasets: [{
                                label: 'Chiến of Votes',
                                data: [5, 7],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>

            <div id="myChart" style="width:100%; max-width:600px; height:500px;">

        </div>
    </div>
@endsection

@section('script')
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            let analysisProduct = JSON.parse('{!! json_encode($analysisProduct) !!}');
            
            // Set Data
            const data = google.visualization.arrayToDataTable(analysisProduct);

            // Set Options
            const options = {
                title: 'World Wide Wine Production'
            };

            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);

        }
    </script>
@endsection