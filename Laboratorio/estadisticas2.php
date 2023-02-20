<?php 
    //Indica que utilizaremos la conexion con la base de datos creada en conexion.php
    include ('conexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ScienceLab</title>
    <script src="https://kit.fontawesome.com/8aeddd2dcd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    </head>


    <body>
        <header><!--Contenedor del menu-->
        <div class="containerMenu">
            <div class="logo">
                <form action="index.php">
                <button class="logo">
                <img src="images/logo3.png">
                </form>
                </button>
                <form action="index.php">
                <button class="logo">
                <h1>ScienceLab</h1>
                </form>
                </button>
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="botonMenu"></i>
                <div id="backMenu"></div>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="agendarCita.php">Agendar cita</a></li>
                        <li><a href="consultarResultados.php">Consultar resultados</a></li>
                        <li><a href="estadisticas.php" id="selected">Estadísticas</a></li>
                </nav>
            </div>
            <a class="administracion" href="administracion.php">Administración</a>
        </div>

    </header>

    <main><!--Contenedor del cuerpo de la pagina-->
        <div class="containerCover">
            <div class="cover">
                 <!--Grafica de casos positivos de COVID comparando tipo de prueba antigenos y PCR-->
                <div class="estadisticasInfo">
                    <h2>Casos de COVID positivos por tipo ANTIGENOS/PCR durante el 2022</h2>
                    <canvas id="chartANTPCRCOVID" width="500px" height="380px"></canvas>
                </div>
                <!--Grafica de casos positivos de THC comparando mayores y menores de edad-->
                <div class="estadisticasInfo">
                     <h2>Casos de THC positivos MAYORES y MENORES de edad durante el 2022</h2>
                    <canvas id="chartMayMenTHC" width="500px" height="380px"></canvas>
                </div>
                <div class="siguienteBoton">
                    <form action="estadisticas3.php">
                    <button>
                    <img src="images/siguienteBoton.png">
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script>//Construccion de la grafica de casos positivos de COVID comparando tipo de prueba antigenos y PCR
        var ctx= document.getElementById("chartANTPCRCOVID").getContext("2d");
        var chartANTPCRCOVID = new Chart(ctx,{
            type:"bar",
             data:{
                labels:[
                <?php  
                $sql = "SELECT * FROM positivoscovid2022";
                $resultado = mysqli_query($conectar, $sql);
                while($registros = mysqli_fetch_array($resultado)){

                    ?>
                    '<?php echo $registros["mes"] ?>',
                    <?php
                }
                ?>
                ],
                datasets:[{
                        label:'Antigenos',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivoscovid2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["antigenos"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)'
                        ]
                },
                {
                        label:'PCR',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivoscovid2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["PCR"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)'
                        ]
                }
                ]

            },
            options:{
                legend: {
                labels: {
                    fontColor: "#fff",
                    fontSize: 16
                }
            },
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true,
                                fontColor: "#fff",
                                fontSize: 14,
                                stepSize: 1
                            }
                    }],
                    xAxes: [{
                            ticks: {
                                fontColor: "#fff",
                                fontSize: 14,
                                beginAtZero: true,
                                stepSize: 1
                    }
                }]
                }
            }
        });
    </script>

    <script>//Construccion de la grafica de casos positivos de THC comparando mayores y menores de edad
        var ctx= document.getElementById("chartMayMenTHC").getContext("2d");
        var chartMayMenTHC = new Chart(ctx,{
            type:"bar",
            data:{
                labels:[
                <?php  
                $sql = "SELECT * FROM positivoscovid2022";
                $resultado = mysqli_query($conectar, $sql);
                while($registros = mysqli_fetch_array($resultado)){

                    ?>
                    '<?php echo $registros["mes"] ?>',
                    <?php
                }
                ?>
                ],
                datasets:[{
                        label:'Mayores',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivosthc2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["mayor"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)','rgb(234, 49, 49,0.9)'
                        ]
                },
                {
                        label:'Menores',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivosthc2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["menor"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)','rgb(49, 234, 94,0.9)'
                        ]
                }
                ]

            },
            options:{
                legend: {
                labels: {
                    fontColor: "#fff",
                    fontSize: 16
                }
            },
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true,
                                fontColor: "#fff",
                                fontSize: 14,
                                stepSize: 1
                            }
                    }],
                    xAxes: [{
                            ticks: {
                                fontColor: "#fff",
                                fontSize: 14,
                                beginAtZero: true,
                                stepSize: 1
                    }
                }]
                }
            }
        });
    </script>

    <!--La inclusion del archivo script.js-->
    <script src="js/script.js"></script>

    </body>

  
</html>
