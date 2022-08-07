<?php
    session_start();
    
    include_once 'database/connection.php';

    $wrongps=null; 
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Something was posted
       
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//Read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
                // setcookie('emailcookie',$user_name,time()+86400);
                setcookie('passwordcookie',$password,time()+86400);
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
                                              
						$_SESSION['id'] = $user_data['id'];
						header("Location: ../start-quizes.php");
						die;
					}
				}
			}
			
			$wrongps = "ព័តមានមិនត្រឹមត្រូវ!!!";
		}else
		{
			$wrongps = "ព័តមានមិនត្រឹមត្រូវ!!!";
		}
	}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ស្វាគមន៍មកកាន់ការឆ្លើយសំណួរ</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Link Style -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navbar.css">
    

    <!-- Khmer Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Hanuman:wght@300;400&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Battambang', cursive;
            font-family: 'Hanuman', serif;
            font-family: 'Kdam Thmor Pro', sans-serif;
        }
    </style>



</head>
<body>
  
  
  <style>
                                
    .button-login button {
        border: 1px solid #00A4BD;
        padding: 10px 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        display: inline-block;
        color: #00A4BD;
    }
    .button-login button:hover {
        background: #00A4BD;
        color: #fff;
    }
</style>

<div class="conatiner">
    <div class="row">
        <div class="col-md-12">
            <!-- Using Bootstrap Card -->
            <div class="login-form">
                <div class="card-form" style="width: 25rem;">
                    <span class="text-sm text-danger text-center"><?php echo $wrongps; ?></span>
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3">Login Form</h2>
                        <form method="POST">
                            <div class="field mb-4">
                                <span class="fa fa-user"></span>
                                <input type="text" name="user_name" placeholder="Enter Name">
                            </div>
                            <div class="field mb-4 space">
                                <span class="fa fa-lock"></span>
                                <input type="password" class="pass-key" name="password" placeholder="Password">
                                <span class="show">SHOW</span>
                            </div>
                           
                            <div class="button-login text-center">
                                <button type="submit" class="btn p-2 mb-4">Log In</button>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <p class="text-center">Don't have account?<a href="forms/sign_up.php">Signup Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

  
  
  
  <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
</body>
</html>
