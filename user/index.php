<?php

session_start();

  if($_SESSION['useremail'] && $_SESSION['userpassword']){

    require_once 'vendor/includes/config.php';

    require_once 'vendor/includes/function.php';

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

            <?= $_GET['done']; ?>

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

      <?php if(checkVerification() == false){ ?> 
        <div class="container pt-3">

          <div class="alert alert-danger fade show" role="alert">

          <div class="p-a-15">

            <h4>Looks Like You're not Verified!</h4>

            <p class="m-b-20">Please Check your Email for the verification code. Also make sure to check the Spam/Junk folder of your Email as Mails are sometimes caught in the Spam filters.</p>

            <a href="verify.php"><button type="button" class="btn btn-danger">Verify Account</button></a>

            <a href="resend_vercode.php"><button type="button" class="btn btn-dark">Resend Verification Email</button></a>

          </div>

          </div>

          </div>
      <?php }else{ ?>

      <div class="row">

          <?php
          $email = $_SESSION['useremail'];

          $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
          
          $r_user_id = mysqli_query($con, $q_user_id);
          
          $re_user_id = mysqli_fetch_assoc($r_user_id);
          
          $user_id = $re_user_id['id'];

          $q = "SELECT * FROM `user_classes` INNER JOIN `trainer_classes` ON `trainer_classes`.id = `user_classes`.class_id WHERE `user_id` = '$user_id' LIMIT 6;";

          $r = mysqli_query($con, $q);

          while($re=mysqli_fetch_assoc($r)){

          ?>

        <div class="col-4">

          <div class="card">



            <!-- Card image -->

                <a href="#" class="btn btn-primary" target="_blank">

              <img class="card-img-top" src="../images/classes/<?php echo $re['class_picture']; ?>"

                alt="Card image cap">

              </a>



            <!-- Card content -->

            <div class="card-body">



              <!-- Title -->

              <h4 class="card-title"><?php echo $re['class_name']; ?></h4>

              <!-- Button -->

              <a href="#" class="btn btn-primary" target="_blank">View Class</a>



            </div>

          </div>

        </div>

        <?php } ?>

      </div>

      <!-- Card -->

    </div>

        <?php } ?>

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

