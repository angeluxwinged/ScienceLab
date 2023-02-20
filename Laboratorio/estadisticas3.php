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
                <!--Grafica de casos positivos de COVID comparando casos totales-->
                <div class="estadisticasInfo">
                    <h2>Casos totales de COVID positivos durante el 2022</h2>
                    <canvas id="chartTotalCOVID" width="450px" height="450px"></canvas>
                </div>
                <!--Grafica de casos positivos de THC comparando casos totales-->
                <div class="estadisticasInfo">
                     <h2>Casos totales de THC positivos durante el 2022</h2>
                    <canvas id="chartTotalTHC" width="450px" height="450px"></canvas>
                </div>
                <div class="siguienteBoton">
                    <form action="estadisticas.php">
                    <button>
                    <img src="images/siguienteBoton.png">
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    
    <script>//Construccion de la grafica de casos positivos de COVID comparando casos totales
        var ctx= document.getElementById("chartTotalCOVID").getContext("2d");
        var chartTotalCOVID= new Chart(ctx,{
            type:"pie",
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
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivoscovid2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["total"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(213, 0, 0,0.9)','rgb(136, 14, 79,0.9)','rgb(123, 31, 162,0.9)','rgb(49, 27, 146,0.9)','rgb(83, 109, 254,0.9)','rgb(0, 121, 107,0.9)','rgb(104, 159, 56,0.9)','rgb(238, 255, 65,0.9)','rgb(245, 127, 23,0.9)','rgb(93, 64, 55,0.9)','rgb(97, 97, 97,0.9)','rgb(255, 255, 255,0.9)'
                        ]
                }]
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
                                stepSize: "none"
                            }
                    }]
                }
            }
        });
    </script>

    <script>//Construccion de la grafica de casos positivos de THC comparando casos totales
        var ctx= document.getElementById("chartTotalTHC").getContext("2d");
        var chartTotalTHC= new Chart(ctx,{
            type:"pie",
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
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivosthc2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["total"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(213, 0, 0,0.9)','rgb(136, 14, 79,0.9)','rgb(123, 31, 162,0.9)','rgb(49, 27, 146,0.9)','rgb(83, 109, 254,0.9)','rgb(0, 121, 107,0.9)','rgb(104, 159, 56,0.9)','rgb(238, 255, 65,0.9)','rgb(245, 127, 23,0.9)','rgb(93, 64, 55,0.9)','rgb(97, 97, 97,0.9)','rgb(255, 255, 255,0.9)'
                        ]
                }]
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
                                stepSize: "none"
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
