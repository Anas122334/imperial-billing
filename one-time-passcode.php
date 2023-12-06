<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="shortcut icon" href="assets/image/imperail.webp" type="image/x-icon">

    <title>Document</title>
</head>

<body>
    <div class="container-fluid signin-bg pt-5 pb-4">
        <div class="container d-flex flex-column justify-content-center w-100 h-100 ">
            <div><a href="sign-in.php" class="text-white"><i class="bi bi-chevron-left"></i></a><span class="text-white fs-4 fw-bold"> SELF-MANAGEMENT PORTAL</span></div>
            <p class="text-white">Your IMPERIAL account at your fingertips</p>
            <div class="row w-100 ">
                <div class="col-12 col-md-5 col-sm-12 d-flex jusitfy-content-center">
                   <div class="card sign-card p-3">
                   <div class="row">
                        <div class="col-12 col-md-8 col-sm-12 d-flex align-items-center"> <span class="fw-bold fs-4 text-red">IMPERIAL INTERNET</span></div>
                        <div class="col-12 col-md-4 col-sm-12">
                            <span class="d-flex flex-column ">
                                <small class="fw-bold" style="font-size: 11px;">POWERED BY</small>
                                <a href="index.php"><img src="assets/image/imperial-logo.webp" class="img-fluid sign-in-logo" alt=""></span></a>
                        </div>
                    </div>
                    <h5 class="fw-bold">One Time Password</h5>
                    <div style="height: 2px; background-color: red;"></div>
                    <form class="row g-3 pt-3">
                        <div class="col-12 col-md-12 col-sm-12">
                            <label for="username" class="form-label text-center w-100 text-red">*Enter Your OTP number</label>
                            <input type="number" class="form-control bg-light shadow-none text-center inp-num" id="otp"  placeholder="One time passcode" required>
                        </div>
                        <!-- <div class="col-12 col-md-6 col-sm-12">
                            <label for="phonenumber" class="form-label">*Phone Number</label>
                            <input type="tel" class="form-control bg-light shadow-none" id="phonenumber" placeholder="Phone Number" required>
                        </div>
                        <div class="col-12 col-md-6 col-sm-12">
                            <label for="password" class="form-label">*Password</label>
                            <div class="input-group flex-nowrap border  rounded">
                                <input type="password" class="form-control shadow-none bg-light border-0" id="password" placeholder="Password" required>
                                <span class="input-group-text bg-light border-0" id="addon-wrapping"><i class="bi bi-eye-fill "></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-sm-12">
                            <label for="confirmpassword" class="form-label">*Confirm Password</label>
                            <div class="input-group flex-nowrap border rounded">
                                <input type="password" class="form-control shadow-none bg-light border-0" id="confirmpassword" placeholder="Confirm Password" required>
                                <span class="input-group-text bg-light border-0" id="addon-wrapping"><i class="bi bi-eye-fill "></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12">
                            <label for="email" class="form-label">*Email</label>
                            <input type="email" class="form-control shadow-none bg-light" id="email" placeholder="Email" required>
                        </div> -->
                        <div style="height: 2px; background-color: red;" class="mt-3"></div>
                        <div class="col-12 d-flex justify-content-center">
                            <a href="dashboard.php" type="submit" class="btn bttn">Validate</a>
                        </div>
                        <div style="height: 2px; background-color: red;" class="mt-2"></div>
                        <div style="height: 2px; background-color: red;" class="mt-2"></div>
                        <div>
                            <h4 class="mt-2">Get Connected Now!</h4>
                            <a href="sign-in.php" class="text-decoration-none text-dark fw-bold">Sign-in<i class="bi bi-chevron-right fw-bold "></i></a>
                        </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    // Get the input element
    var inputElement = document.getElementById("otp");

    // Add an event listener to the input element
    inputElement.addEventListener("input", function(event) {
            // Remove non-numeric characters
            var numericValue = this.value.replace(/[^0-9]/g, "");

        // Restrict to 10 digits
        if (numericValue.length > 6) {
            numericValue = numericValue.slice(0, 6);
        }

        // Update the input value with numeric characters only
        this.value = numericValue;
    });
</script>
</html>