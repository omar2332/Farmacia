<?php include('header.php'); ?>

</div>
    </nav>
  
    <header class="text-black" >
        <div class="container text-center">
            <h1 class="tituloInicio">FARMACIA</h1>
            <p class="lead">Esto es un proyecto para ingenieria de sofware <?php include('conexion.php'); ?>  </p>

            
        </div>
        
    </header>

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://placehold.it/900x400" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x400" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x400" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>
        </div>
        
            <p class="text-sm-center contenidoSlider">Nuestros Productos Con Descuento</p>
    </div>
    

  <!-- End your project here-->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright</p>
        </div>
        <!-- /.container -->
         </footer>
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

</body >
</html>


