<?php

session_start();

  if($_SESSION['email'] && $_SESSION['userpass']){

    require_once 'vendor/includes/config.php';

    include_once 'vendor/includes/head.php';

    include_once 'vendor/includes/nav.php';

    ?>





  <!--Main layout-->

  <main class="pt-5 mx-lg-5">

    <div class="container-fluid mt-5">



      <!-- Heading -->

      <div class="card mb-4 wow fadeIn">

        <?php

        if(isset($_GET['done'])){

        ?>

        <!--Card content-->

        <div class="card-body d-sm-flex justify-content-center">



          <h4 class="mb-2 mb-sm-0 pt-1" style="color: green;">

            Login Successful

          </h4>



        </div>

      <?php } ?>



      </div>

      <!-- Heading -->

       <div class="card mb-4 wow fadeIn">

        <!--Card content-->

        <div class="card-body d-sm-flex justify-content-center">

          <h4 class="mb-2 mb-sm-0 pt-1">

            Latest Classes

          </h4>

        </div>



      </div>

      <!-- Card -->

      <div class="row">

          <?php

          $q = "SELECT * FROM `games` WHERE `status` = 1 ORDER BY id DESC LIMIT 6;";

          $r = mysqli_query($con, $q);

          while($re=mysqli_fetch_assoc($r)){

          ?>

        <div class="col-4">

          <div class="card">



            <!-- Card image -->

                <a href="https://gamewrap.net/post/<?php echo $re['slug']; ?>" class="btn btn-primary" target="_blank">

              <img class="card-img-top" src="https://gamewrap.net/images/<?php echo $re['featured_image']; ?>"

                alt="Card image cap">

              </a>



            <!-- Card content -->

            <div class="card-body">



              <!-- Title -->

              <h4 class="card-title"><?php echo $re['name']; ?></h4>

              <!-- Text -->

              <p class="card-text"><?php echo $re['description']; ?></p>

              <!-- Button -->

              <a href="https://gamewrap.net/game/<?php echo $re['slug']; ?>" class="btn btn-primary" target="_blank">View Post</a>



            </div>

          </div>

        </div>

        <?php } ?>

      </div>

      <!-- Card -->

    </div>



    </div>

  </main>

  <!--Main layout-->



<?php include_once 'vendor/includes/footer.php'; ?>



</body>



</html>

<?php

}else{

  header("location:logout.php");

}

?>

