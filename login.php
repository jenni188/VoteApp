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
        <div class="row">
          <div class="col-3 moi">
            One of three columns
          </div>
          <div class="col-5 moi">
            One of three columns
            <form>
            <h3>Login</h3>
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" class="form-control"
                      placeholder="Username" />
                    <label class="form-label" for="username">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password"  class="form-control"  placeholder="Password"/>
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="text-center">
                    <button type="button" class="btn btn-primary btn-block " id="log-btn">Log in</button>
                  </div>

                  <div >
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="register.php"type="button" class="btn btn-primary">Create new</a>
                  </div>

                </form>
          </div>
          <div class="col-3 moi" >
            One of three columns
          </div>
        </div>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>