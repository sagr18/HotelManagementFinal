<html>
<head>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">function add_chatinline(){var hccid=81542571;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</head>
</head>


<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","hotel");
$_SESSION['login']='no';
	if(isset($_POST['login']))
	{
		
		$Name=$_POST['name'];
		$Email=$_POST['email'];
		$Password=$_POST['password'];
		
		$sql="insert into signup(name,email,password) values('$Name','$Email','$Password')";
		
		$result=mysqli_query($con,$sql);

		if($result)
		{
			        $_SESSION['login']='yes';
					header("Location: loginpage.php");
					
					exit;

		}
		else
		{	
			$_SESSION['login']='no';
			header("Location: registration_page.php");
			
    
		}	
	}
	
?>


</body>

</html>