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
<nav class="navbar navbar-expand-lg bg-light fixed-to">
  <div class="container-fluid hello">
    <span>Hello🖐<span style="color: red;"> <?php echo $user_data['user_name']; ?></span></span>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
        <!-- <span>រយះពេលរបស់អ្នកមាន ៖ <span id="demo"></span></span> -->
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        
       
      </ul>

      <div class="button-logout">
        
        <a href="forms/sign_upt.php" class="btn btn-info">Log Out</a>
      </div>
     
    </div>
    
  </div>
  
</nav>



  Hello
  
  
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
