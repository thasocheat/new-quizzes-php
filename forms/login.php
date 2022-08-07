<?php
    session_start();
    
    include_once '../database/connection.php';

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


<?php include_once '../inc/header.php'; ?>
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
                                <p class="text-center">Don't have account?<a href="sign_up.php">Signup Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>







<?php include_once '../inc/footer.php'; ?>