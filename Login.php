<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email" id="txtUser">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" id="txtPassword">
				</div>
				<button class="button login__submit" onclick="getInfo()">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    
</body>
<script>
        var objPeople = [{
                username: "admin",
                password: "1234"
            }, {
                username: "admin2",
                password: "1234"
            }, {
                username: "admin3",
                password: "1234"
            }

        ]

        function login(url) {
            window.open("admin_page.php");
        }

        function getInfo() {
            var username = document.getElementById('txtUser').value
            var password = document.getElementById('txtPassword').value
            console.log(username);
            
            if(username=="staff" && password=="1234"){
                window.open("Staff_Interface.php");
            }
            for (var i = 0; i < objPeople.length; i++) {

                if (username == objPeople[i].username && password == objPeople[i].password) {
                    console.log(username + " is logged in!!!")
                    login();
                    return
                }
            }
            console.log("incorrect username or password")
        }
    </script>
</html>