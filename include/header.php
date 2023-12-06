<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="assets/image/imperail.webp" type="image/x-icon">

  <title>Document</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/image/imperial-logo.webp" class="img-fluid" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white"><i class="bi bi-text-right fs-2"></i></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service-selection.php">Service Selection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Customer Profile</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Customer Profile</h5>
                    <button type="button" class="btn " data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg text-white fs-5"></i></button>
                  </div>
                  <div class="modal-body">
                    <h4 class="text-center"><i class="bi bi-pencil-square"></i> Personal Information</h5>
                      <form class="row g-4 mt-1 p-3">
                        <div class="col-md-6">
                          <label for="fullname" class="form-label fs-5">Full Name:</label>
                          <input type="text" class="form-control border-0 bg-light " id="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                          <label for="email" class="form-label fs-5">Email:</label>
                          <input type="email" class="form-control bg-light border-0" id="email" placeholder="joanndanels@gmail.com" required>
                        </div>
                        <div class="col-md-6">
                          <label for="phone" class="form-label fs-5">Phone Number</label>
                          <input type="tel" class="form-control bg-light border-0" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6">
                          <label for="address" class="form-label fs-5">Address:</label>
                          <input type="text" class="form-control bg-light border-0" id="address" placeholder="22920 County Rd 4142, Lindale, TX 75771" required>
                        </div>
                        <div class="col-md-3 d-flex flex-column">
                          <button type="button" class="btn bttn me-3" data-bs-dismiss="modal">Back</button>
                        </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link " href="sign-in.php">Sign Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>