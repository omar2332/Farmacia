
<?php session_start()?>
<?php
	$mysqli=new mysqli("localhost:3307","root","root","farmacia"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


    echo "hola mundo";

    if(!empty($_POST)){
        
        $pVenta = mysqli_real_escape_string($mysqli,$_POST['pVenta']);
        $pCompra = mysqli_real_escape_string($mysqli,$_POST['pCompra']);
        $compuesto = mysqli_real_escape_string($mysqli,$_POST['compuesto']);
        $comentario = mysqli_real_escape_string($mysqli,$_POST['nombre']);

        

        $sql = "insert into medicamento(precio_venta,precio_compra,comentario,id_compuesto) values ($pVenta,$pCompra,'$comentario',$compuesto)";

 
        
        echo $sql;
        $result=$mysqli->query($sql);
        
        header("location: home.php");

    }

?>

<?php include('tituloAdmin.php') ?>
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema farmacia <small>Añadir Farmaco</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevos 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form method="post">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo farmaco</div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Información básica</strong></legend><br>
                            <div class="group-material">
                                <span>Compuesto</span>
                                <select  name="compuesto" class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro">
                                    <option disabled="" selected="">Selecciona una compuesto</option>
                                    <?php
                                        $sql = "SELECT * FROM compuesto";
                                        $result=$mysqli->query($sql);

                                        while ($fila = mysqli_fetch_row($result)) {
                                            echo   '<option value='.$fila[0].'>'.$fila[1].'</option>';
                                        }
                                    
                                    
                                    ?>
                                </select>
                            </div>
                            
                            <div class="group-material">
                                <input name = "pVenta" type="text" class="tooltips-general material-control" placeholder="Escribe aquí el Precio de venta" required="" maxlength="20" data-toggle="tooltip" data-placement="top" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Precio Venta</label>
                            </div>
                            <div class="group-material">
                                <input name="pCompra" type="text" class="material-control" placeholder="Escribe aquí el precio de Compra" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el título o nombre del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Precio Compra</label>
                            </div>
                            <div class="group-material">
                                <input name="nombre" type="text" class="material-control" placeholder="Escribe aquí el Nombre del farmaco" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Comentario</label>
                            </div>

                            
                            <p class="text-center">
                                <!-- <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button> -->
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
                       </div>
                   </div>
                </div>
            </form>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quam dicta et, ipsum quo. Est saepe deserunt, adipisci eos id cum, ducimus rem, dolores enim laudantium eum repudiandae temporibus sapiente.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp;<i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2016 Carlos Alfaro</div>
        </footer>

        
    </div>

    
</body>
</html>