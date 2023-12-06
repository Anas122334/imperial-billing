<?php include("./include/header.php") ?>

<div class="container">
    <div class="row g-4 mt-3 mb-3">
        <div class="col-12 col-md-3 col-sm-12">Welcome : Stella Danels</div>
        <div class="col-12 col-md-3 col-sm-12">Last Login : 02 Aug 2023 07:52 PM</div>
    </div>
</div>
<div class="container mb-4">
    <div class="card border rounded-3 ">
        <div class="card-head bg-red rounded text-white pad d-flex justify-content-between">
            <span class="fs-5 fw-bold">Account Summary</span>
            <a href="dashboard.php" class="text-decoration-none text-white"><i class="bi bi-x-lg fw-bold"></i></a>
        </div>

        <div class="row p-4">
            <div class="col-12 col-md-3 col-sm-12 p-4">
                <a  class="text-decoration-none text-white"  id="toggleCard">
                    <!-- card  -->
                    <div class="card bg-redd p-3 text-center text-center" style="border-radius: 13px;">
                        <span><img src="assets/image/wireless.webp" class="img-fluid" alt=""></span>
                        <h5 class="mt-3">Wireless</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-sm-12 p-4">
                <a  class="text-decoration-none text-white"  id="toggleCard1">
                    <!-- card  -->
                    <div class="card bg-redd p-3 text-center text-center" style="border-radius: 13px;">
                        <span><img src="assets/image/broadband.webp" class="img-fluid" alt=""></span>
                        <h5 class="mt-3">Broadband</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-sm-12 p-4">
                <a  class="text-decoration-none text-white"  id="toggleCard2">
                    <!-- card  -->
                    <div class="card bg-redd p-3 text-center text-center" style="border-radius: 13px;">
                        <span><img src="assets/image/voice.webp" class="img-fluid" alt=""></span>
                        <h5 class="mt-3">Voice</h5>
                    </div>
                </a>
            </div>

            <div class="table-responsive " id="tableContainer" style="display: none;">
                <!-- table  -->
                <div class="row table-row">
                    <div class="col-12 col-md-2 col-sm-12 fs-5 d-flex align-items-center">Device Usage:</div>
                    <div class="col-12 col-md-4  p-0 col-sm-12 d-flex align-items-center">
                        <form id="transactionForm " class="d-flex ">

                            <select name="month" id="monthSelect0" class="form-select me-3">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <input type="hidden" name="transactionid" id="transactionid" value="">
                            <button type="button" id="" class="btn bttn">Submit</button>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered mt-3 size">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Time</th>
                            <th scope="col" class="text-center">Usage (MBPS)</th>
                            <th scope="col" class="text-center">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">2023-02-01</td>
                            <td class="text-center">00:00:00</td>
                            <td class="text-center">12279.22</td>
                            <td class="text-center">1534.9</td>
                        </tr>
                        <tr>
                            <td class="text-center">2023-02-02</td>
                            <td class="text-center">00:00:00</td>
                            <td class="text-center">953.16</td>
                            <td class="text-center">119.15</td>
                        </tr>
                        <tr>
                            <td class="text-center">2023-02-04</td>
                            <td class="text-center">00:00:00</td>
                            <td class="text-center">2839.85</td>
                            <td class="text-center">354.98</td>
                        </tr>
                        <tr>
                            <td class="text-center">2023-02-07</td>
                            <td class="text-center">00:00:00</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                        </tr>
                        <tr>
                            <td class="text-center">2023-02-22</td>
                            <td class="text-center">00:00:00</td>
                            <td class="text-center">19093.91</td>
                            <td class="text-center">2386.74</td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="3"></td>
                            <!-- <td class="text-center"></td>
                                            <td class="text-center"></td> -->
                            <td class="text-center fw-bold">Total Usage (MB): 5155.28</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive " id="tableContainer1" style="display: none;">
               <h1>hello hassan</h1>
            </div>
            <div class="table-responsive " id="tableContainer2" style="display: none;">
               Hello Anas
            </div>
        </div>
    </div>



    <script>
   document.addEventListener('DOMContentLoaded', function () {
    function toggleDisplay(cardToggle, tableContainer) {
        if (tableContainer.style.display === 'none') {
            tableContainer.style.display = 'block';
        } else {
            tableContainer.style.display = 'none';
        }
    }

    const cards = [
        { toggle: document.getElementById('toggleCard'), container: document.getElementById('tableContainer') },
        { toggle: document.getElementById('toggleCard1'), container: document.getElementById('tableContainer1') },
        { toggle: document.getElementById('toggleCard2'), container: document.getElementById('tableContainer2') }
    ];

    cards.forEach(function (card) {
        card.toggle.addEventListener('click', function () {
            cards.forEach(function (otherCard) {
                if (otherCard !== card) {
                    otherCard.container.style.display = 'none';
                }
            });
            toggleDisplay(card.toggle, card.container);
        });
    });
});

</script>


    <?php include("./include/footer.php") ?>