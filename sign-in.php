<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/image/imperail.webp" type="image/x-icon">

    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'K2D', sans-serif;
    object-fit: cover;
}

.text-red{
    color: #ff0000 !important;
}

.bttn{
    background-color: #be0000;
    color: white;
    padding: 6px 40px;
}


.signin-bg{
    background-image: url("./assets/image/signin-bg.webp");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh !important ;
}
.sign-card{
    border-radius: 20px;
}
.form-check-input:checked {
    background-color: #000;
    border-color: #0000;
}
.inp-num::-webkit-outer-spin-button,
.inp-num::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;
}  
@media screen and (min-width:280px) and (max-width:400px) {
    .sign-in-logo{
        width: 50% !important;
    }
    
}

</style>
<body>
    <div class="container-fluid signin-bg h-100 pt-5 pb-4">
        <div class="container d-flex flex-column justify-content-center w-100 h-100 ">
            <div><a href="index.php" class="text-white"><i class="bi bi-chevron-left"></i></a><span class="text-white fs-4 fw-bold"> SELF-MANAGEMENT PORTAL</span></div>
            <p class="text-white">Your IMPERIAL account at your fingertips</p>
            <div class="row w-100 ">
                <div class="col-12 col-md-4 col-sm-12 card sign-card p-3">
                    <div class="row">
                        <div class="col-12 col-md-8 col-sm-12"> <span class="fw-bold fs-5 text-red">IMPERIAL INTERNET</span></div>
                        <div class="col-12 col-md-4 col-sm-12">
                            <span class="d-flex flex-column ">
                                <small class="fw-bold" style="font-size: 11px;">POWERED BY</small>
                                <a href="index.php"><img src="assets/image/imperial-logo.webp" class="img-fluid sign-in-logo" alt=""></span></a>
                        </div>
                    </div>
                    <h5 class="fw-bold">Sign-in</h5>
                    <div style="height: 2px; background-color: red;"></div>
                    <form action="" class="mt-2">
                        <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-light border-0" id="addon-wrapping"><i class="bi bi-telephone-fill fs-5"></i></span>
                            <input type="tel" class="form-control bg-light shadow-none border-0" id="formGroupExampleInput" placeholder="Enter your register mobile number">
                        </div>
                        <!-- <div class="input-group flex-nowrap mt-2">
                            <input type="password" class="form-control bg-light shadow-none border-0" id="formGroupExampleInput2" placeholder="Password">
                            <span class="input-group-text bg-light border-0" id="addon-wrapping"><i class="bi bi-eye-fill fs-5"></i></span>
                        </div>
                        <label for="formGroupExampleInput2" class="form-label text-red">Forgot your password?</label> -->
                        <!-- <div class="form-check mt-2">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Keep me signed in
                            </label>
                        </div> -->
                        <div style="height: 2px; background-color: red;" class="mt-3"></div>
                        <div class="mt-3 mb-3 text-center">
                            <a href="one-time-passcode.php" class="btn bttn">Sign in</a>
                        </div>
                        <div style="height: 2px; background-color: red;" class="mt-2"></div>
                        <div style="height: 2px; background-color: red;" class="mt-2"></div>
                        <h4 class="mt-2 m-0">Get Connected Now!</h4>
                        <!-- <a href="signup.php" class="text-decoration-none text-dark fw-bold">Sign-Up<i class="bi bi-chevron-right fw-bold "></i></a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    // Get the input element
    var inputElement = document.getElementById("formGroupExampleInput");

    // Add an event listener to the input element
    inputElement.addEventListener("input", function(event) {
        // Remove non-numeric characters
        var numericValue = this.value.replace(/[^0-9]/g, "");

        // Restrict to 10 digits
        if (numericValue.length > 10) {
            numericValue = numericValue.slice(0, 10);
        }

        // Update the input value with numeric characters only
        this.value = numericValue;
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>