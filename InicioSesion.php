

<?php
	$mysqli=new mysqli("localhost:3307","root","root","farmacia"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


//$normal = mysql_query("SELECT * FROM normal,cliente WHERE cliente.correo = '$usuario' AND cliente.contrasenia = '$password' AND normal.id_normal = cliente.id_cliente");
//$admin = mysql_query("SELECT * FROM administrador,cliente WHERE cliente.correo = '$usuario' AND cliente.contrasenia = '$password' AND administrador.id_admin = cliente.id_cliente");
session_start();
	
if(isset($_SESSION["id_usuario"])){
  header("Location: index.php");
}
 

 
  $usuario = mysqli_real_escape_string($mysqli,$_POST['email']);
  $password = mysqli_real_escape_string($mysqli,$_POST['password']);
  $error = '';
  
  $sha1_pass = sha1($password);
  
  $sql = "SELECT * FROM normal,cliente WHERE cliente.correo = '$usuario' AND cliente.contrasenia = '$password' AND normal.id_normal = cliente.id_cliente";
  $result=$mysqli->query($sql);
  $rows = $result->num_rows;
  
  //SELECT * FROM normal,cliente WHERE cliente.correo = 'luis@gmail.com' AND cliente.contrasenia = '12345' AND normal.id_normal = cliente.id_cliente

  if($rows > 0) {
    
    $row = $result->fetch_assoc();
    $_SESSION['id_usuario'] = $row['id_cliente'];
    $_SESSION['tipo_usuario'] = $row['id_normal'];
    
    header("location: index.php"); 
    exit();
    
    }

    $sql2 = "SELECT * FROM administrador,cliente WHERE cliente.correo = '$usuario' AND cliente.contrasenia = '$password' AND administrador.id_admin = cliente.id_cliente";
    $result2=$mysqli->query($sql2);
    $rows2 = $result2->num_rows;
    //echo $rows2;
    if($rows2 > 0) {
      $row2 = $result2->fetch_assoc();
      $_SESSION['id_usuario'] = $row2['id_cliente'];
      $_SESSION['nombre'] = $row2['usuario'];
      $_SESSION['tipo_usuario'] = $row2['id_admin'];
      
      header("location: home.php");
      exit();
   }else {
    $error = "El nombre o contraseña son incorrectos";
  }


}
?>
<?php include('header.php') ?>
        </div>
      </nav>


  <header class="bg-info text-white">
      <div class="container text-center">
          <h1 class="tituloInicio">FARMACIA</h1>
      </div>
  </header>
  
  <div class="container-fluid">
        <div class="row ">
          <div class="d-md-flex col-md-3 col-lg-2"></div>
          <div class="col-md-5 col-lg-8">
            <div class="login py-lg-5 align-items-center">
              <div class="container">
                <div class="row">
                  <div class="col-md-2 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4 text-sm-center text-white">INICIO DE SESION</h3>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                      <div class="form-label-group">
                        <input name = "email" type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
                        <label for="inputEmail">Correo Electronico</label>
                      </div>
      
                      <div class="form-label-group">
                        <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                        <label for="inputPassword">Contraseña</label>
                      </div>
                      
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Iniciar Sesion</button>
                     
                      <div class="form-group"> <!-- State Button -->               
                    </div>
                       
                    </form>
                        <div>
                        <button class="btn btn-lg btn-secondary btn-block btn-login text-uppercase font-weight-bold mb-2" onclick = "window.location='registrase_formulario.php'">Registrarse</button>
                        </div>
                       <div class="text-center">
                        <a class="small" href="#">¿Olvidaste tu contraseña?</a></div>
                        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright</p>
        </div>
        <!-- /.container -->
      </footer>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <script>
    function aparecer(){
      var ancla = document.getElementsByClassName('form-control');
      for(var i = 0;i<ancla.length;i++){
        ancla[i].classList.toggle('desaparece')
      }
    }
    </script>

</body>
</html>
