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

    $filenameee =  $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $jobtitle = $_POST['jobtitle'];
    $joblocation = $_POST['joblocation'];
    $usermessage = $_POST['message'];
    
    $message ="First Name = ". $firstname . "\r\nLast Name = ". $lastname . "\r\nPhone Number =" . $phoneno . "\r\nEmail = " . $email ."\r\nDepartment = " . $department ."\r\nJob Title =" . $jobtitle. "\r\nJob Location =" . $joblocation.  "\r\nMessage =" . $usermessage; 
    
    $subject ="Regarding Career in VDK";
    $fromname ="VDK career portal";
    $fromemail = 'harshalsangme4@gmail.com';  //if u dont have an email create one on your cpanel

    $mailto = 'harshalsangme10@gmail.com';  //the email which u want to recv this email




    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        // echo "mail send ... OK"; // do what you want after sending the email

       echo '
            <script type="text/javascript">
			swal("Submitted Successfully!", "Will contact you shortly", "success");
            </script>

			';
        
        
    } else {
        // echo "mail send ... ERROR!";
        // print_r( error_get_last() );

        echo '
            <script type="text/javascript">
			swal("Fill all details", "Contact on Phone number", "error");
            </script>

			';
    }

?>

<div class="position-absolute top-50 start-50 translate-middle">
<a href="/" >
<button class="btn btn-primary" type="submit">Go to home</button>
</a>
</div>

</body>
</html>