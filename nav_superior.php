<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/nav_superior.css">
    <link rel="stylesheet" href="asset/fonts/style.css">
</head>

<body>
    <nav>
        <div class="cont-nav">
            <div class="menu_icon">
                <div class="icono">
                    <i id="icono_menu" for="" class="icon-menu" onclick="menu()"></i>

                </div>
                <div class="logo">
                    <img src="asset/img/IVSS_blanco.png" width="50px" alt="">
                </div>
            </div>

            <div class="user">
                <ul>
                    <li>
                        <a href="#">Nombre de Usuario</a>
                        <ul>
                            <li>
                                <a href="#">Clouse Session</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- barra lateral -->

    <div class="cont-sidebar">
        <div class="sidebar" id="sidebar">
            <div class="encabezado_sidebar">
                <div class="clouse_sidebar">
                    <span class="icon-cross" id="clouse_bar" onclick="clouse()"></span>
                </div>
                <center>
                    <div class="logo">
                        <img src="asset/img/IVSS_blanco.png" width="100px" alt="">
                    </div>
                    <div class="user_sidebar">
                        <h3>NOMBRE DEL USUARIO</h3>
                    </div>
                </center>

            </div>
            <ul>
                <li class="activ_enlaces"><a href="#"><i class="icon-home "> Inicio</i> </a></li>
                <li><a href="#"><i class="icon-user"> Registrar Paciente</i></a></li>
                <li>
                    <a href="#" id="sub_menu"><i class="icon-aid-kit"> Centro Hospitalarios</i>
                        <span class="icon-circle-down first"></span>
                    </a>
                    <ul id="sub_menu_ul_uno">
                        <li><a href="#">sabado Luciani</a></li>
                        <li><a href="#">Domingo Luciani</a></li>
                        <li><a href="#">Lunes Luciani</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#" id="sub_menu_dos"><i class="icon-home"> Centro de amor</i>
                        <span class="icon-circle-down second"></span>
                    </a>
                    <ul id="sub_menu_ul_dos">
                        <li><a href="#">sabado2 Luciani2</a></li>
                        <li><a href="#">Domingo2 Luciani2</a></li>
                        <li><a href="#">Lunes2 Luciani2</a></li>
                    </ul>
                </li> -->
                <li><a href="#"><i class="icon-key"> Contraseña</i></a></li>
                <li><a href="#"><i class="icon-share"> Salir</i></a></li>
            </ul>
        </div>
    </div>

    <!-- funcion del despliegue submenu -->
    <script>
        let sub_menu = document.getElementById('sub_menu');
        sub_menu.addEventListener('click', () => {
            // alert();
            document.getElementById('sub_menu_ul_uno').classList.toggle('active_sub_menu');
            document.querySelector('.first').classList.toggle('rotate');
        });
        let sub_menu_dos = document.getElementById('sub_menu_dos');
        sub_menu_dos.addEventListener('click', () => {
            // alert();
            document.getElementById('sub_menu_ul_dos').classList.toggle('active_sub_menu');
            document.querySelector('.second').classList.toggle('rotate');
        });

        // enlaces
        // let enlaces = document.querySelectorAll('.cont-sidebar .sidebar ul li a');
        // enlaces.forEach((element) => {
        //     element.addEventListener('click', (e) => {
        //         // document.querySelectorAll('.cont-sidebar .sidebar ul li .activ_enlaces').classList.remove('activ_enlaces');
        //         console.log(e.target.classList.add('activ_enlaces'));
        //     });

        // });
        // activar barra lateral
        function menu() {
            // let icono_menu= document.getElementById('icono_menu');
            // icono_menu.addEventListener('click', () =>{
            document.getElementById('sidebar').classList.add('activ_sidebar');
            // });
        }

        function clouse() {

            // let clouse_bar= document.getElementById('clouse_bar');
            // clouse_bar.addEventListener('click', () =>{
            document.getElementById('sidebar').classList.remove('activ_sidebar');
            // });
        }
    </script>
</body>

</html>