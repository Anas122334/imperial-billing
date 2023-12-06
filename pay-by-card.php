<?php include("./include/header.php") ?>

<div class="container">
    <div class="row g-4 mt-3 mb-3">
        <div class="col-12 col-md-3 col-sm-12">Welcome : Stella Danels</div>
        <div class="col-12 col-md-3 col-sm-12">Last Login : 02 Aug 2023 07:52 PM</div>
    </div>
</div>
<div class="container mb-4 ">
    <div class="card border rounded-3 ">
        <div class="card-head bg-red rounded-top text-white pad d-flex justify-content-between">
            <span class="fs-5 fw-bold">Account Summary</span>
            <a href="dashboard.php" class="text-decoration-none text-white"><i class="bi bi-x-lg fw-bold"></i></a>
        </div>

        <div class="row p-4">
            <div class="col-12 col-md-6 col-sm-12 p-4">
                <img src="assets/image/card-img.webp" class="img-fluid radius" alt="">
            </div>
            <div class="col-12 col-md-6 col-sm-12 p-4  d-flex align-items-center">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center ">
                        <h5 class="m-0">Payable Amount</h5>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 border rounded pad bg-light">$125</div>
                    <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center ">
                        <h5 class="m-0">Amount to Pay</h5>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 border rounded pad">$125</div>
                    <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center ">
                        <h5 class="m-0">Amount to be Paid</h5>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 rounded border bg-light pad">$125</div>
                    <div class="col-12 col-md-12 col-sm-12 "><a href="make-payment.php" class="btn bttn">Make Payment</a></div>
                </div>
            </div>
        </div>

    </div>



    <script>
        function sanitizeInput(value, targetId) {
            var inputElement = document.getElementById(targetId);
            var sanitizedValue = value.replace(/[^0-9]/g, '');
            var formattedAmount = sanitizedValue !== '' ? '$' + sanitizedValue : '';
            inputElement.value = formattedAmount;
        }
    </script>

    <?php include("./include/footer.php") ?>