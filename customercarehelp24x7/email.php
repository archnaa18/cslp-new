<?php


$ip= getenv("REMOTE_ADDR");

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $warranty = $_POST['product'];
 $service=$_POST['service'];
 $address=$_POST['address'];


if($name=='' || $email=='' || $phone=='' || $address=='')
{
    echo $msg="Please Fill all Fields";
echo "<script>document.location='index.html?msg=$msg';  </script>";
       exit;
    
}


$formcontent="Name : $name \n Email : $email \n Phone: $phone \n Service : $service \n Waranty : $waranty \n  Address : $address";


$recipient = "info@customercarehelp24x7.in";

$subject = "ENQUIRY FORM";

	$headers .= "From: $email \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

mail($recipient, $subject, $formcontent, $headers) or die("Error!");


echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
 
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Customercare Help 24x7
</title>
        <meta name="description" content="Customercare Help 24x7
" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords"  content="Customercare Help 24x7
" />
        <meta name="Resource-type" content="Document" />
		  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			
<!------ Include the above in your HEAD tag ---------->

<style>
/*--thank you pop starts here--*/
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
	margin-top:10%;
	background:#eee;
	
	
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.cupon-pop{
	font-size: 25px;
    margin-bottom: 40px;
	color:#222;
	display:inline-block;
	text-align:center;
	padding:10px 20px;
	border:2px dashed #222;
	clear:both;
	font-weight:normal;
}
.cupon-pop span{
	color:#03A9F4;
}
.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/

.logo{padding-top:20px}
.logo img{width:220px}
</style>

   <body>
 
<!--Model Popup starts-->
<div class="container">
    <div class="row">
	
	
	
      <div class="thank-you-pop cupon-pop ">
	  
	  <div class="logo">
	<a href="https://customercarehelp24x7.in/" style="background:none"></a>
	</div>
	
							<img src="images/logo2.jpg" alt="">
							<h1>Thanks for reaching out!</h1>
							
							<p>Our team will be in touch soon.</p>
							
 						</div>
    </div>
</div>
<!--Model Popup ends-->

    </body>
</html>'
?>

<script>
         setTimeout(function(){
            window.location.href = 'https://customercarehelp24x7.in/';
         }, 5000);
      </script>		