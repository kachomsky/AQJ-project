<?php 

/*error = 0  => No hay errores en el login
  error = 1  => Usuario o contrasena no han sido introducidos correctamente
  error = 2  => Ha habido algun error con la base de datos.
*/

$error = 0;
if(!isset($_SESSION['user'])){
	if(isset($_POST['email']) && isset($_POST['password'])){
		//$emailFiltered = htmlentities($_POST['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
		$emailFiltered = $_POST['email'];
		$password = $_POST['password'];
		$conn = PdoDB::getInstance();
		$loginUser = $conn->logInUser($emailFiltered);
		if(isset($loginUser['error'])){
			$error = 2;
		}else{
			//comparamos contrasenas encriptadas MD5
			//if(password_verify(htmlentities($password, ENT_QUOTES | ENT_HTML5, 'UTF-8'), $loginUser['Password'])){
			if(htmlentities($password, ENT_QUOTES | ENT_HTML5, 'UTF-8') == $loginUser['Password']){
				$_SESSION['user'] = $loginUser;
				header('Location: index.php');
			}else{
				$error = 1;
			}
		}
	}

	include __DIR__."/../views/login.php";
}else{
	include __DIR__."/../views/home.php";
}

?>