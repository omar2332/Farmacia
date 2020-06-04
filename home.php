

<?php
	$mysqli=new mysqli("localhost:3307","root","root","farmacia"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


    session_start();

?>

<?php include('tituloAdmin.php') ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema Farmacia <small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">administradores</div>
                <div class="tile-num full-reset"> <?php
                $sql = "SELECT count(*)  as admins FROM administrador ";
                $result=$mysqli->query($sql);
                $rows = $result->num_rows;
                $row = $result->fetch_assoc();
                echo $row['admins'];
                
                ?> </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles">clientes</div>
                <div class="tile-num full-reset"><?php
                $sql = "SELECT count(*)  as clientes FROM cliente ";
                $result=$mysqli->query($sql);
                $rows = $result->num_rows;
                $row = $result->fetch_assoc();
                echo $row['clientes'];
                
                ?></div>
            </article>
            
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-truck"></i></div>
                <div class="tile-name all-tittles">proveedores</div>
                <div class="tile-num full-reset"><?php
                $sql = "SELECT count(*)  as prove FROM proveedor ";
                $result=$mysqli->query($sql);
                $rows = $result->num_rows;
                $row = $result->fetch_assoc();
                echo $row['prove'];
                
                ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
                <div class="tile-name all-tittles">Medicamentos</div>
                <div class="tile-num full-reset"><?php
                $sql = "SELECT count(*)  as med FROM medicamento ";
                $result=$mysqli->query($sql);
                $rows = $result->num_rows;
                $row = $result->fetch_assoc();
                echo $row['med'];
                
                ?></div>
            </article>
            
        </section>
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
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; trs <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2016 Carlos Alfaro</div>
        </footer>
    </div>
</body>
</html>