<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- METADATOS -->
        <meta charset="UTF-8">
        <meta name="author" content="Deviu System">
        <meta name="descripcion" content="Aplicativo web Valiny">
        <meta name="keywords" content="HTML, CSS, JavaScript, React">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- TITULO -->
        <title>Aplicativo web | Valiny</title>
    
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="../../images/codigo-qr.png">
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
        <!-- CSS -->
        <link rel="stylesheet" href="../../css/style.css">
    </head>
<body>
  <!-- NAVEGACION MODIFICADA -->
<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"><span>REPORTES</span></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php"><i class="bi bi-house-door"></i> Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Asistencia_Escolar.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia</a></li>
                        <li><a class="dropdown-item" href="Optimizacion_Asistencia.php"><i class="bi bi-gear"></i> Optimización de Asistencia</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes de Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Registro_Curso.php"><i class="bi bi-file-earmark-text"></i> Registro de Asistencia</a></li>
                        
                    </ul>
                </li>
            </ul>
            <a class="nav-link btn btn-primary ms-md-2" href="Ingreso.php" role="button"><i class="bi bi-door-open"></i> Salir</a>
        </div>
    </div>
</nav>
    
        <!--TITULO DEL ADMINISTRADOR-->
        <div class="container mt-4">
            <h1 class="text-center">Registro de Asistencia</h1>

        <!-- Gráficas -->
        <div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
    <div class="row">
        <div class="col-lg-5 col-xl-4">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown"
                            type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">Ordenar por:</p>
                            <button class="dropdown-item" onclick="mostrarReporte('ingresoEstudiantes')">Cantidad de estudiantes que han ingresado</button>
                            <button class="dropdown-item" onclick="mostrarReporte('servicioComedor')">Cantidad de estudiantes que han tomado el servicio del comedor</button>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div id="informeContainer" class="card-body">
                    <h5>Informe de Asistencia</h5>
                    <p>Fecha del informe: 04 de diciembre de 2023</p>
                
                    <div class="informe-detalle">
                        <h6>Asistencia General</h6>
                        <p>Total de estudiantes: 1100</p>
                        <p>Estudiantes presentes: 950</p>
                        <p>Estudiantes ausentes: 150</p>
                        <p>Porcentaje de asistencia: 86.36%</p>
                    </div>
                
                    <div class="informe-detalle">
                        <h6>Asistencia por Grado</h6>
                        <p>Grado 10: 200 estudiantes presentes (80% de asistencia)</p>
                        <p>Grado 11: 220 estudiantes presentes (90% de asistencia)</p>
                        <p>Grado 12: 180 estudiantes presentes (85% de asistencia)</p>
                    </div>
                
                    <div class="informe-detalle">
                        <h6>Observaciones</h6>
                        <ul>
                            <li>Observación 1: Descripción de la observación.</li>
                            <li>Observación 2: Descripción de la observación.</li>
                            <li>Observación 3: Descripción de la observación.</li>
                        </ul>
                    </div>
                </div>
                
                <script>
                    function mostrarReporte(tipo) {
                        var informeContainer = document.getElementById('informeContainer');
                        informeContainer.innerHTML = ''; // Limpiar contenido existente
                
                        switch (tipo) {
                            case 'ingresoEstudiantes':
                                informeContainer.innerHTML = `
                                    <p>Reporte específico</p>
                                    <p>Cantidad de estudiantes que han ingresado a la institución: 880 estudiantes (80% de los 1100 estudiantes totales).</p>
                                `;
                                break;
                            case 'servicioComedor':
                                informeContainer.innerHTML = `
                                    <p>Reporte específico</p>
                                    <p>Cantidad de estudiantes que han tomado el servicio del comedor: 528 estudiantes (60% de 880 estudiantes que han ingresado a la institución).</p>
                                `;
                                break;
                            // Puedes agregar más casos según sea necesario
                            default:
                                break;
                        }
                    }
                </script>
                <div class="card-body">
                    <div class="chart-area"><canvas
                            data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                            <div class="text-center small mt-4"><span class="me-2"><i
                                        class="fas fa-circle text-primary"></i>&nbsp;Direct</span><span
                                    class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;Social</span><span
                                    class="me-2"><i class="fas fa-circle text-info"></i>&nbsp;Refferal</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Contenido de los gráficos de asistencias -->
        <div class="mt-4">
            <h4>Reporte Específico</h4>
             <!-- Lista de observaciones relacionadas con la asistencia -->
             <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Todo List</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6>
                                <span class="text-xs">10:30 AM</span>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-1">
                                    <label class="form-check-label" for="formCheck-1"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6>
                                <span class="text-xs">11:30 AM</span>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-2">
                                    <label class="form-check-label" for="formCheck-2"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <h6 class="mb-0"><strong>Lunch meeting</strong></h6>
                                <span class="text-xs">12:30 AM</span>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-3">
                                    <label class="form-check-label" for="formCheck-3"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Formulario para agregar observaciones -->
<div class="mt-4">
    <h4>Agregar Observación</h4>
    <form id="observacionForm">
        <div class="mb-3">
            <label for="tituloObservacion" class="form-label">Título de la Observación:</label>
            <input type="text" class="form-control" id="tituloObservacion" required>
        </div>
        <div class="mb-3">
            <label for="descripcionObservacion" class="form-label">Descripción de la Observación:</label>
            <textarea class="form-control" id="descripcionObservacion" rows="3" required></textarea>
        </div>
        <button type="button" class="btn btn-primary" onclick="agregarObservacion()">Agregar Observación</button>
    </form>

    <!-- Lista de observaciones relacionadas con la asistencia -->
    <ul id="listaObservaciones">
        <!-- Aquí se agregarán dinámicamente las observaciones -->
    </ul>
</div> <br>

<!-- Botones de Acción -->

            <button type="button" class="btn btn-success">Guardar Asistencia</button>

    </div>

        </div>

    <!-- CONTENIDO DE "Optimización de Asistencia" -->
    <div class="container mt-4">
        <h3 class="text-center">Optimización de Asistencia</h3>

        <!-- Observaciones -->
    <div class="mt-4">
        <h4>Observaciones</h4>
        <ul>
            <!-- Lista de observaciones relacionadas con la asistencia -->
            <li>Observación 1: Descripción de la observación.</li>
            <li>Observación 2: Descripción de la observación.</li>
            <li>Observación 3: Descripción de la observación.</li>
            <!-- lista dinámicamente con base de datos -->
        </ul>
    </div>

   
    <div class="container mt-4">
                <h2>Busqueda de registros</h2>
                <div class="mb-3">
                <form action="contador.php" method="post">


                    <input type="radio" name="Contar" value="Falla" id="">Falla <br>
                    <input type="radio" name="Contar" value="Asiste" id="">Asiste <br>
                    <input type="radio" name="Contar" value="Retardo" id="">Retardo <br>
                    <input type="radio" name="Contar" value="Evasion" id="">Evasion <br>
                    <input type="radio" name="Contar" value="Justificada" id="">Falla Justificada <br> <br>
                    
                    <button type="submit" class="submit-btn">Buscar asistencia</button> 
                </form>
                </div>
            </div><br>

    <!-- Botones de Acción -->
    
        <center><button type="button" class="btn btn-primary">Exportar Informe</button></center>

</div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
