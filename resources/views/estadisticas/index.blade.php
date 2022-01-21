@extends('layouts.tecno_app')
@section('contenido')

        <!-- <div class="container"> -->
            <div class="card col s12">
                <div class="card-header">
                    <h3>Estadisticas Empleados/Tareas</h3>
                </div>
                <div class="card-body">
                    <canvas id="paginas" width="200px" height="200px"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="card col s6" style="padding=5px">
                    <div class="card-header">
                        <h3>Cantidad de personas según su rol</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="personas" width="200px" height="200px"></canvas>
                    </div>
                </div>
                <div class="card col s6">
                    <div class="card-header">
                        <h3>Tareas Pendientes/realizadas</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="consulta" width="200px" height="200px"></canvas>
                    </div>
                </div>
                
                
            </div>
        <!-- </div> -->
   

   

@endsection

    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script>

        var ctx = document.getElementById('paginas').getContext('2d');
        var datos = {{$empleadotareajs}};
        var labels = ['Cant. de Empleados','Cant. de tareas'];
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


        var ctx = document.getElementById('personas').getContext('2d');
        var datos = {{$persona_lista}};
        var labels = ['Administrador','Empleado','Cliente'];
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
        var datos = {{$tareapencompljs}};
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Tareas Pendientes', 'Tareas Realizadas'],
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

       
    </script>
    @endsection
