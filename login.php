<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QLSB Login</title>

    <!--css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/qlsb-login.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--js-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>


</head>
<body>
	<div class = "container">
	<div class="wrapper">
		<form method="post" name="Login_Form" class="form-signin">
		    <h3 class="form-signin-heading">Đăng nhập hệ thống</h3>

			  <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" autofocus=""/>
			  <input type="password" class="form-control" id="password" placeholder="Mật khẩu" />
			  <div>
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ mật khẩu
                    </label>
              </div>
              <div class="btn-block">
              	<button class="btn btn-lg btn-primary" name="Submit" value="Login" type="submit">Đăng nhập</button>
              	<button class="btn btn-lg btn-danger" name="Cancel" value="Cancel" onclick="window.close()">Hủy</button>
              </div>

		</form>
	</div>
</div>
</body>
</html>
