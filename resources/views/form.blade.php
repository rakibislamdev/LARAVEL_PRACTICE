<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <style>
        .form{
            margin: 20px 300px;
        }
    </style>


    <!-- bootstrap.css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex  justify-content-end " id="navbarSupportedContent">
            <div  class="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login/Signup</a>
                  </li>

                </ul>
            </div>

          </div>
        </div>
      </nav>

    <div class="form">
        <h2 class="text-center mb-3">Input Form</h2>
        <form class="row g-3" method="POST" action="{{ route('store') }}">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="semister" class="form-label">Semister</label>
                <input type="text" name="semister" class="form-control" id="semister">
              </div>            <div class="col-md-6">
                <label for="roll" class="form-label">Roll</label>
                <input type="number" name="roll" class="form-control" id="roll">
              </div>
              <div class="col-md-6">
                <label for="shift" class="form-label">Shift</label>
                <input type="text" name="shift" class="form-control" id="shift">
              </div>
            <div class="col-md-6">
                <label for="reg" class="form-label">Registration</label>
                <input type="number" name="reg" class="form-control" id="registration">
              </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" name="checkbox" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  I accept all terms and conditions
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
    </div>

</body>
</html>
