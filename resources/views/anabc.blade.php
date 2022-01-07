<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// if(isset($_GET['user']) && isset($_GET['pass']))
// {
// 	$user = $_GET['user'];
// 	$pass = $_GET['pass'];

// function mysql_fix_string($conn, $string) {
// 	//Tiếp theo nữa là vấn đề về "cách đối xử" của host đối với hàm addslashes này. Mình dùng qua nhiều host của nhiều nhà cung cấp khác nhau thì phát hiện ra có sự khác biệt khi dùng hàm này. Một số host khi insert không addslashes thì dữ liệu vẫn vào được, một số lại không (Cùng code, cùng chuỗi insert). Đối với các host bắt buộc addslashes khi insert chuỗi có dấu ' thì addslashes($a) theo VD ở trên khi vào CSDL vẫn sẽ là "It's John's car!" chứ không phải là "It\'s John\'s car!". Đối với các host không bắt buộc nhập addslashes thì ngược lại. Như vậy cùng 1 mã nguồn và up lên 2 host khác nhau thì CSDL sẽ được insert vào khác nhau. 1 có dấu \ và 1 không có dấu \.
// 	$string = htmlspecialchars($string);
// 	return $conn->real_escape_string($string);
// }

// 	if ($user!='' && $pass != '') 
// 	{
// 		$host = 'localhost'; //
// 		$login = 'root';
// 		$passlog = '';
// 		$dbname = 'injectiondb';
// 		$GET = '3306';

// 		// start fix
// 		// connect
// 		$conn = new mysqli($host, $login, $passlog, $dbname, $GET);
// 		if ($conn->error)
// 			die($conn->error);
// 		$user = mysql_fix_string($conn, $_GET['user']);
// 		$pass = mysql_fix_string($conn, $_GET['pass']);
// 		$sql = "SELECT * FROM account WHERE un='$user' AND pw='$pass'";
// 		// end fix

// 		echo $sql;
// 		$result = $conn->query($sql);
// 		if(!$result)
// 			die($conn->error);
// 		if(count(mysqli_fetch_all($result))>0)
// 			echo "<h1>Login successfully!!!</h1>";
// 		else
// 			echo "<h1>Login failed!!!</h1>";
// 	}
// 	else
// 	{
// 		echo "<h1>username and password must be not null</h1>";
// 	}
// }


	// cách 2: truyền tham số vào câu truy vấn để hệ quản trị csdl tự xử lý
// if(isset($_GET['user']) && isset($_GET['pass']))
// {
// 	$user = $_GET['user'];
// 	$pass = $_GET['pass'];

// 	$host = 'localhost'; //
// 	$login = 'root';
// 	$passlog = '';
// 	$dbname = 'tet';
// 	$GET = '3306';

// 	if ($user!='' && $pass != '') 
// 	{

// 		$conn = new mysqli($host, $login, $passlog, $dbname, $GET);
// 		if ($conn->connect_error) {
// 			die($conn->connect_error);
// 		}

// 		$sql = "Select * From users where email=? and password=?";
// 		$stm = $conn->prepare($sql);
// 		$stm->bind_param('ss', $user, $pass);
// 		if($stm->execute()) {
// 			$result = $stm->get_result();
// 			$num_rows = $result->num_rows;
// 		}

// 		// $sqll = "Select * From account where un='" . $user . "' and pw='" . $pass . "'";
// 		// echo $sqll;
// 		if($num_rows > 0)
// 			echo "<h1>Login successfully!!!</h1>";
// 		else
// 			echo "<h1>Login failed!!!</h1>";
// 	}
// 	else
// 	{
// 		echo "<h1>username and password must be not null</h1>";
// 	}
// }


	//ban goc bi loi SQL injection
if(isset($_GET['user']) && isset($_GET['pass']))
{
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	if ($user!='' && $pass != '') 
	{
		$host = 'localhost'; //
		$login = 'root';
		$passlog = '';
		$dbname = 'laivanvo';
		$GET = '3306';
		$conn = new mysqli($host, $login, $passlog, $dbname, $GET);
		if (!$conn) {
			die($conn->error_connect);
		}

		$sql = "Select * From users where email='" . $user . "' and password='" . $pass . "'";
		echo $sql;
		$result = $conn->query($sql);
		if(!$result)
			die($conn->error);
		if(count(mysqli_fetch_all($result))>0)
			echo "<h1>Login successfully!!!</h1>";
		else
			echo "<h1>Login failed!!!</h1>";
	}
	else
	{
		echo "<h1>username and password must be not null</h1>";
	}
}
?>
<form action="" method="GET">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="Login">
				<input type="reset" name="Reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>