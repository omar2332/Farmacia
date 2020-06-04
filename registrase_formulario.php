<?php 
    	$mysqli=new mysqli("localhost:3307","root","root","farmacia"); 
	
        if(mysqli_connect_errno()){
            echo 'Conexion Fallida : ', mysqli_connect_error();
            exit();
        }

        if(!empty($_POST))
        {
                    
         
          
          $app =  mysqli_real_escape_string($mysqli,$_POST['app']);
          $apm =  mysqli_real_escape_string($mysqli,$_POST['apm']);
          $dom  =  mysqli_real_escape_string($mysqli,$_POST['address']);
          $cor =  mysqli_real_escape_string($mysqli,$_POST['email']);
          $nombre = mysqli_real_escape_string($mysqli,$_POST['name']);
          $user = mysqli_real_escape_string($mysqli,$_POST['User']);
          $password = mysqli_real_escape_string($mysqli,$_POST['Contraseña']);
        
          $sha1_pass = sha1($password);
          
          $sql = "insert into cliente(nombre,apellido_paterno,apellido_materno,domicilio,correo,usuario,contrasenia) values ('$nombre','$app','$apm','$dom','$cor','$user','$password')";
          $result=$mysqli->query($sql);

          $sql = "select max(id_cliente) as id from cliente";
          $result=$mysqli->query($sql);
          $row = $result->fetch_assoc();
          $sql = "insert into normal(id_normal) values (".$row['id'].")";
          $result=$mysqli->query($sql);
          
          header("location: index.php");  
        
        }


?>

<?php include('header.php'); ?>


            </div>
          </nav>


          <div class="container py-5">
                <div class="row py-5">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post">
                                <fieldset>
                                    <legend class="text-center header">Registrarse</legend>
            
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="lname" name="app" type="text" placeholder="Apellido Paterno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="lname" name="apm" type="text" placeholder="Apellido Materno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-address-book bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="lname" name="address" type="text" placeholder="Domicilio" class="form-control">
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-address-card bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-fish bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phone" name="User" type="text" placeholder="Usuario" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-eye-dropper bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phone" name="Contraseña" type="password" placeholder="Contraseña" class="form-control">
                                        </div>
                                    </div>
            
            
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
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
