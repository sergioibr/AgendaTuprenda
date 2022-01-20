@extends('layouts.tecno_app')
@section('contenido')

        <div class="container">
            <div class="card col-lg-12">
                <div class="card-header">
                    <h2>Paginas Visitadas</h2>
                </div>
                <div class="card-body">
                    <canvas id="paginas" width="200px" height="200px"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="card col-lg-6 mx-auto">
                    <div class="card-header">
                        <h2>Cantidad de personas</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="personas" width="200px" height="200px"></canvas>
                    </div>
                </div>
                <br>
                <div class="card col-lg-6 mx-auto">
                    <div class="card-header">
                        <h2>Tipos de Atenciones</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="consulta" width="200px" height="200px"></canvas>
                    </div>
                </div>
                <br>
                <div class="card col-lg-6 mx-auto">
                    <div class="card-header">
                        <h2>Tipos de Pagos</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="pagos" width="200px" height="200px"></canvas>
                    </div>
                </div>
                <div class="card col-lg-6 mx-auto">
                    <div class="card-header">
                        <h2>Monto Pagados</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="monto" width="200px" height="200px"></canvas>
                    </div>
                </div>
            </div>
        </div>
   

   

@endsection

    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script>

        var ctx = document.getElementById('paginas').getContext('2d');
      
        var datos = [5,8]
        var labels = ['admin_edit','consulta_show'];
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    data: datos,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 2
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


        var ctx = document.getElementById('personas').getContext('2d');
        var datos = [1,3,5];
        var labels = ['Cliente','Administrador','Doctor'];
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: datos,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 2
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
        var ctx = document.getElementById('consulta').getContext('2d');
        var datos = [12,10];
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Consulta', 'Visita'],
                datasets: [{
                    data: datos,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 2
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
        var ctx = document.getElementById('pagos').getContext('2d');
        var datos = [1,4];
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Consulta', 'Visita'],
                datasets: [{
                    data: datos,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
        var ctx = document.getElementById('monto').getContext('2d');
        var datos = [12,4];
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Consulta', 'Visita'],
                datasets: [{
                    label: '# pagos',
                    data: datos,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
    @endsection
