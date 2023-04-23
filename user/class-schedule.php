<?php

session_start();

  if($_SESSION['useremail'] && $_SESSION['userpassword']){

    include_once 'vendor/includes/head.php';

    include_once 'vendor/includes/nav.php';

    require_once 'vendor/includes/config.php';

    ?>

    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">



    	<div class="container-fluid mt-5">

	    	<div class="card mb-4 wow fadeIn">

	        	<!--Card content-->

		        <div class="card-body d-sm-flex justify-content-center">

		          <h4 class="mb-2 mb-sm-0 pt-1">

		            Manage Classes

		          </h4>

		        </div>

	     	</div>

			 <?php if(isset($_GET['err'])){ ?> <div class="alert alert-success" style="text-align: center;"> <?= $_GET['err']; ?> </div> <?php } ?>
              <?php if(isset($_GET['done'])){ ?> <div class="alert alert-success" style="text-align: center;"> <?= $_GET['done']; ?> </div> <?php } ?>

		    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

			  <thead>

			    <tr>

			      <th class="th-sm">Class Name

			      </th>

			      <th class="th-sm">Date Enrolled

			      </th>

                  <th class="th-sm">Next Class Date

			      </th>

                  <th class="th-sm">Remove

			      </th>

                  <th class="th-sm">View

			      </th>

			    </tr>

			  </thead>

			  <tbody>

			  	<?php

                $email = $_SESSION['useremail'];
                $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
                $r_user_id = mysqli_query($con, $q_user_id);
                $re_user_id = mysqli_fetch_assoc($r_user_id);
                $user_id = $re_user_id['id'];

			  	$q = "SELECT * FROM `user_classes` INNER JOIN `trainer_classes` ON `trainer_classes`.id = `user_classes`.class_id WHERE `user_id` = '$user_id'";

			  	$r = mysqli_query($con, $q);

			  	while($re = mysqli_fetch_assoc($r)){

			  	?>

			    <tr>

			      <td><?php echo $re['class_name']; ?></td>

                  <td><?php echo date("F jS, Y", strtotime($re['updated_at'])); ?></td>

                  <td><?php echo date('Y-m-d') ?></td>

			      <td><a href="remove_class.php?id=<?php echo $re['id']; ?>&userid=<?= $user_id; ?>"><button class="btn btn-danger btn-sm">Remove</button></td>

                  <td><a href="../class.php?id=<?php echo $re['id']; ?>"><button class="btn btn-success btn-sm">View Class</button></td>

			    </tr>

				<?php } ?>

			   </tbody>

			</table>

		</div>

	</main>

	<script type="text/javascript">

	$(document).ready(function () {

	$('#dtBasicExample').DataTable();

	$('.dataTables_length').addClass('bs-select');

	});

	</script>

	<script type="text/javascript" src="js/addons/datatables.min.js"></script>



    <?php include_once 'vendor/includes/footer.php'; ?>



</body>



</html>

<?php

}else{

  header("location:logout.php");

}

?>