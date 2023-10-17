<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">

</head>

<body>
    <header>
        <div class="menu">
            <ul>
                <li class="logo">
                    <a href='https://postimg.cc/XrnWgNBF' target='_blank'><img src='https://i.postimg.cc/XrnWgNBF/logo-peque-o-rs.png' border='0' alt='logo-peque-o-rs' /></a>
                </li>
                <li class="menu-item hidden"><a href="../consumoApiBDD/">Inicio</a></li>
                <li class="menu-item hidden"><a href="informacion.php">Información</a></li>
            </ul>
        </div>

        <div class="heroe text-center">
            <h2 class="text-light">REGISTRO DE TODOS LOS USUARIOS EXTRAIDOS DE UNA API</h2>
        </div>
    </header>

    <section>

        <div class=" card rounded p-5 table-responsive" style="background-color: white;">
            <table id="tb" class="pt-4 pb-4 table-hover table table-light ">
                <thead class="text-center">
                    <th><label>Registro</label></th>
                    <th><label>Nombre</label></th>
                    <th><label>Usuario</label></th>
                    <th><label>Correo Electronico</label></th>
                    <th><label>Telefono</label></th>
                    <th><label>Pagina Web</label></th>
                </thead>

                <tbody class="text-center">

                    <?php
                    $url = "https://jsonplaceholder.typicode.com/users";
                    $json = file_get_contents($url);
                    $datos = json_decode($json, true);

                    foreach ($datos as $clave => $valor) {
                        echo "<tr>";
                        echo "<td>" . "<b>" . $valor["id"] . "</b>" . "</td>";
                        echo "<td>" . $valor["name"] . "</td>";
                        echo "<td>" . $valor["username"] . "</td>";
                        echo "<td>" . $valor["email"] . "</td>";
                        echo "<td>" . $valor["phone"] . "</td>";
                        echo "<td>" . $valor["website"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </section>

    <!-- js -->
    <script src="../js/js.js"></script>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!--Bootstrap JS-->

    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tb').DataTable();
            $('#tblApi').DataTable();
        });
    </script>


    <footer class="footer mt-3 border-top">
        <div class="row align-items-center justify-content-center  pb-3">
            <div class="col-md-6 text-center text-md-left">
                <a href='https://postimg.cc/XrnWgNBF' target='_blank'><img src='https://i.postimg.cc/XrnWgNBF/logo-peque-o-rs.png' border='0' alt='logo-peque-o-rs' /></a>

            </div>

            <div class="col-md-6 text-center text-md-right media">
                <small>Sígueme acá:</small>
                <div class="icons">
                    <a href="https://www.facebook.com/otavalotrail" class=""><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)" class=""><i class="ti-github"></i></a>
                    <a href="https://www.instagram.com/otavalotrail/?next=%2F" class=""><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-12 pt-3 text-center text-md-center copy border-top">
            <p class="mb-0">Copyright <script>
                    document.write(new Date().getFullYear())
                </script> &copy; Derechos Reservados</p>
            <small>Realizado por <a target="_blank" href="#">RZaldumbide</a></small>
        </div>
    </footer>
</body>

</html>