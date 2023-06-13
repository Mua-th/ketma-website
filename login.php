<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/07e943f996.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="style.css  ">

    <title>Document</title>
</head>
<body style="background-color: #1e1f22;">
    <div class="row">
    <div class="align-items-center col-lg-6 p-4 d-flex  position-absolute top-50 start-50 translate-middle  justify-content-center pb-4"> 
         <form action="auth.php" method="post">
      <!-- Email input -->
      <div class="form-outline d-flex mb-4">
        <input type="email" id="form2Example1" name="user" placeholder="username" class="form-control" />
        
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" name = "password" placeholder="password" class="form-control" />

      </div>
    
      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input " type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label textbej" for="form2Example31"> Remember me </label>
          </div>
        </div>
    
        <div class="col">
          <!-- Simple link -->
          <a href="#!" class="textorg orglink">Forgot password?</a>
        </div>
      </div>
    
      <!-- Submit button -->
      <button type="submit" class="btn  btn-block mb-4 orgbut ">Sign in</button>
    
      <!-- Register buttons -->
      <div class="text-center d-flex textbej">
        <p >Not a member? <a href="register.php" id="reg"  class="textorg orglink ms-3">Register
          </a></p>
        
        
      </div>
    </form></div>
  </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
     
</body>
</html>