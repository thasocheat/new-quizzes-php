<?php
    session_start();
    include_once '../database/connection.php';
    include_once '../function/function.php';
    
    $input=null;

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Something was posted
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

        // Checking
		if(!empty($user_name) && !empty($email)&& !empty($password))
		{

			//Save to database
			$query = "insert into users (user_name,email,password) values ('$user_name','$email','$password')";

			mysqli_query($con, $query);

            // When signup finished it will go to login form
			header("Location: login.php");
			die;
		}else
		{
			$input = "សូមបញ្ចូលព័តមានជាមុនសិន!!!";
		}
	}




?>

<?php include_once '../inc/header.php'; ?>
<style>
                                
    .button-signup button {
        border: 1px solid #00A4BD;
        padding: 10px 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        display: inline-block;
        color: #00A4BD;
    }
    .button-signup button:hover {
        background: #00A4BD;
        color: #fff;
    }
</style>



<div class="conatiner">
    <div class="row">
        <div class="col-md-4 " style="margin-top: 100px;">
            <h4 class="text-center"><u>ចំណាំ</u>៖</h4>
            <ol>
                <li>សូមកុំបញ្ចូលនូវទិន្និន័យពិតរបស់អ្នក ។</li>
                <li>ដូចជា email or gmail and password ។</li>
                <li>សូមសរសេរបញ្ចូលដោយគ្រាន់តែជាការសាកល្បង (អ្វីក៏បាន) ដាច់ខាតព័តមានពិត ។</li>
                <li>Website នេះគឺបង្កើតឡើងសម្រាប់ជាការឆ្លើយសំណួរបែបកំសាន្ត ។</li>
                <li>និងជាការផ្តល់ចំណេះដឹងបែបខ្លីៗផងដែរ ។</li>
            </ol>
        </div>
        <div class="col-md-4">
            <!-- Using Bootstrap Card -->
            <div class="login-form">
                <div class="card-form" style="width: 25rem;">
                    <span class="text-sm text-danger text-center"><?php echo $input; ?></span>
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3">Signup Form</h2>
                        <form method="POST">
                            <div class="field mb-4">
                                <span class="fa fa-user"></span>
                                <input type="text" placeholder="Enter Name" name="user_name">
                            </div>
                            <div class="field mb-4">
                                <span class="fa fa-envelope"></span>
                                <input type="email" placeholder="Enter Email" name="email">
                            </div>
                            <div class="field mb-4 space">
                                <span class="fa fa-lock"></span>
                                <input type="password" class="pass-key"  placeholder="Password" name="password">
                                <span class="show">SHOW</span>
                            </div>
                            
                            <div class="button-signup text-center">
                                <button type="submit" class="btn p-2 mb-4">Sign Up</button>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <p class="text-center">Have an account?<a href="login.php">Log In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>







<?php include_once '../inc/footer.php'; ?>