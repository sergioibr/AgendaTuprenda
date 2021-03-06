@extends('layouts.tecno_app')
@section('contenido')
@if (@auth()->user()->rol === 'Admin')
<div class="center-align">
<div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25rem;">
                            <img class="card-img-top" src="images/welcome.jpg" width=270px alt="Imagen">
                            <div class="card-body">
                                <small class="card-txt-category">¡Un gusto verte de nuevo administrador!</small>
                                <h5 class="card-title my-2">Este es el software AgendaTuPrendaXpress</h5>
                                <div class="d-card-text">
                                    ¿Qué vas a realizar hoy?
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
@endif
@if (@auth()->user()->rol === 'Cliente')
<div class="center-align">
<div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25rem;">
                            <img class="card-img-top" src="images/welcome.jpg" width=270px alt="Imagen">
                            <div class="card-body">
                                <small class="card-txt-category">¡Un gusto verte de nuevo cliente!</small>
                                <h5 class="card-title my-2">Este es el software AgendaTuPrendaXpress</h5>
                                <div class="d-card-text">
                                    ¿Qué vas a realizar hoy?
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
@endif
@if (@auth()->user()->rol === 'Empleado')
<div class="center-align">
<div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25rem;">
                            <img class="card-img-top" src="images/welcome.jpg" width=270px alt="Imagen">
                            <div class="card-body">
                                <small class="card-txt-category">¡Un gusto verte de nuevo empleado!</small>
                                <h5 class="card-title my-2">Este es el software AgendaTuPrendaXpress</h5>
                                <div class="d-card-text">
                                    ¡A trabajar!
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
@endif
@endsection

    <!-- @section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script>

        var ctx = document.getElementById('paginas').getContext('2d');
        var datos = [5,8];
        var labels = ['tarea_show','consulta_show'];
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label:  ['tarea_show'],
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
                    label: 'pagos',
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
    @endsection -->
