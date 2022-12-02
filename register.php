<php?
></php>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " id="nav-reg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">VoteApp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
             <a class="nav-link" href="#">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="register.php">Register</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="login.php">Login</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">New poll</a>
           </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container">
        <div id="msg" class="alert alert-dismissible alert-danger d-none">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <h4 class="alert-heading">Warning!</h4>
          <p class="mb-0"></a></p>
        </div>
        <div class="row">
          <div class="col-3 moi">
            One of three columns
          </div>
          <div class="col-5 moi">
            One of three columns
            <form name="register" >
              <fieldset>
                <h3>Register</h3>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input name="username"type="text" class="form-control" placeholder="User name">
                </div>
                <div class="form-group">
                  <label for="password" class="form-label mt-4">Password</label>
                  <input name="password" type="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="password" class="form-label mt-4">Confirm password</label>
                  <input name="confirmPassword" type="password" class="form-control"  placeholder="Password again">
                </div>
                <button type="submit" class="btn btn-primary " id="reg-btn">Register</button>
              </fieldset>
            </form>
          </div>
          <div class="col-3 moi" >
            One of three columns
          </div>
        </div>
      </div>
    <script src="js/register.js"></script>
    <script src="js/common.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>