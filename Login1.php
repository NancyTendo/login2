<?php 
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: home.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Diseño.css"/>
    
</head>
<body>
    <form>
        <center>
            <p>
                <img src="C:\Users\Nancy\Desktop\SuperM/Logooo.png" alt="Super" style="width:120px;height:120px; border:0;">
            </p>

       <header>
           
               <b style="font-family:Segoe UI Emoji">REGISTRATE CON TUS DATOS</b>
       
       </header> 
       <p style="font-family:Segoe UI Emoji" > ------------ ¿YA TIENES UNA CUENTA? ------------- </p>
       <nav>
      
               <p style="font-family:Segoe UI Emoji"> INICIAR SESIÓN</p>
           
       </nav>
       <p style="font-family:Segoe UI Emoji">-------------- O REGISTRATE CON ---------------- </p>

       

            <button type="button">FACEBOOK</button>
        </p>
        <button type="button">GOOGLE</button>
        <p>
            <button type="reset">cancelar</button>
        </p>
        

           </center>
</form>
</body>
</html>
<?php ob_end_flush(); ?>