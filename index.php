
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
  
  <?php 
  // session_start();
  require_once ('database/connection.php');
  require_once ('function/function.php');
  
	// $user_data = check_login($con);

?>

	<p>Hello</p>


<!-- Navbar -->
<?php include_once 'inc/navbar.php'; ?>


<!-- Button Quize -->
<?php include_once 'inc/button-quize.php'; ?>
  
  
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
