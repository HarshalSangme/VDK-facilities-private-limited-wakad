<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

	<!-- Bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>


<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='harshalsangme10@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contacting Regarding VDK services';
		$message="Wrote the following : Wants to know about VDK services"."\n\n".$msg;
		// $message = "Wrote the following : Wants to know about VDK services";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";

			echo '
            	<script type="text/javascript">
				swal("Submitted Successfully!", "Will contact you shortly", "success");
            	</script>
			';
		}
		else{
			// echo "Something went wrong!";

			echo '
            <script type="text/javascript">
			swal("Something Went Wrong", "Contact on Phone number", "error");
            </script>

			';

		}
	}
?>

<div class="position-absolute top-50 start-50 translate-middle">
<a href="/" >
<button class="btn btn-primary" type="submit">Go to home</button>
</a>
</div>

</body>
</html>