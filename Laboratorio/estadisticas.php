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
                <!--Grafica de casos positivos de COVID comparando masculinos y femeninos-->
                <div class="estadisticasInfo">
                    <h2>Casos de COVID MASCULINOS/FEMENINOS positivos durante el 2022</h2>
                    <canvas id="chartMascFemCOVID" width="500px" height="380px"></canvas>
                </div>
                <!--Grafica de casos positivos de THC comparando masculinos y femeninos-->
                <div class="estadisticasInfo">
                     <h2>Casos de THC MASCULINOS/FEMENINOS positivos durante el 2022</h2>
                    <canvas id="chartMascFemTHC" width="500px" height="380px"></canvas>
                </div>
                <div class="siguienteBoton">
                    <form action="estadisticas2.php">
                    <button>
                    <img src="images/siguienteBoton.png">
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script>//Construccion de la grafica de casos positivos de COVID comparando masculinos y femeninos
        var ctx= document.getElementById("chartMascFemCOVID").getContext("2d");
        var chartMascFemCOVID= new Chart(ctx,{
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
                        label:'Maculinos',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivoscovid2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["masculino"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)'
                        ]
                },
                {
                        label:'Femeninos',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivoscovid2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["femenino"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)'
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

    <script>//Construccion de la grafica de casos positivos de THC comparando masculinos y femeninos
        var ctx= document.getElementById("chartMascFemTHC").getContext("2d");
        var chartMascFemTHC= new Chart(ctx,{
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
                        label:'Maculinos',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivosthc2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["masculino"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)','rgb(82, 108, 255,0.9)'
                        ]
                },
                {
                        label:'Femeninos',
                        data:[
                        <?php  
                        $sql = "SELECT * FROM positivosthc2022";
                        $resultado = mysqli_query($conectar, $sql);
                        while($registros = mysqli_fetch_array($resultado)){

                        ?>
                        '<?php echo $registros["femenino"] ?>',
                        <?php
                }
                ?>
                        ],
                        backgroundColor:[
                            'rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)','rgb(255, 82, 218,0.9)'
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
