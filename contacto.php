<?php include('header.php')?>

  </div>
    </nav>
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
