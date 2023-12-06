<?php include("./include/header.php") ?>

<div class="container">
    <div class="row g-4 mt-3 mb-3">
        <div class="col-12 col-md-3 col-sm-12">Login IP Address: 255.255.255.255</div>
        <div class="col-12 col-md-3 col-sm-12 ">Internet Status: <span class="fw-bold"><input type="radio" class="border-none" checked> Connected</span></div>
        <div class="col-12 col-md-3 col-sm-12">Welcome : <span class="fw-bold">Stella Danels</span></div>
        <div class="col-12 col-md-3 col-sm-12">Last Login : 02 Aug 2023 07:52 PM</div>
    </div>
</div>
<div class="container mb-4">
    <div class="card border rounded-3 shadow">
        <div class="card-head bg-red pad rounded-top text-white d-flex justify-content-between">
            <span class="fs-5 fw-bold">Dashboard</span>
            <a href="announcement.php" class="text-decoration-none text-white"><i class="bi bi-megaphone-fill"></i> (0)</a>
        </div>
        <div class="p-4">
            <div class="card-bd  p-4">
                <div class="row g-5">
                    <div class="col-12 col-md-6 col-sm-12 ">
                        <div class="card h-100">
                            <div class="card-head bg-red text-white rounded-top p-2 ">
                                <h6 class="m-0 text-center">Customer Details</h6>
                            </div>
                            <div class="card-body  ">
                                <div class="row">
                                    <div class="col">
                                        <ul class="p-0 lh-lg size">
                                            <li class="d-flex justify-content-between "><span>Customer Name:</span> <span>Stella Danels</span></li>
                                            <li class="d-flex justify-content-between "><span>Address:</span> <span>22920 County Rd 4142, Lindale</span></li>
                                            <li class="d-flex justify-content-between "><span>Phone Number:</span> <span>5012308201</span></li>
                                            <li class="d-flex justify-content-between "><span>Customer Email:</span> <span>joanndanels@aol.com</span></li>
                                            <li class="d-flex justify-content-between "><span>Month:</span> <span>January, 2023</span></li>
                                            <li class="d-flex justify-content-between "><span>Package:</span> <span>Internet</span></li>
                                            <li class="d-flex justify-content-between "><span>Status:</span> <span>Active</span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 h-100">
                        <div class="card">
                            <div class="card-head bg-red  text-white rounded-top p-2 ">
                                <h6 class="m-0 text-center">Customer Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <ul class="p-0 lh-lg size">
                                            <li class="d-flex justify-content-between "><span>Contact ID:</span> <span>3804402000000088869</span></li>
                                            <li class="d-flex justify-content-between "><span>Contact Name:</span> <span>Stella Danels</span></li>
                                            <li class="d-flex justify-content-between "><span>Email:</span> <span>joanndanels@aol.com</span></li>
                                            <li class="d-flex justify-content-between "><span>Phone Number:</span> <span>5012308201</span></li>
                                            <li class="d-flex justify-content-between "><span>Outstanding Balance:</span> <span>$214</span></li>
                                            <li class="d-flex justify-content-between "><span>Status:</span> <span>Active</span></li>
                                            <li class="text-end "><a href="pay-by-card.php" class="btn bttn size">Pay by Card*</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 g-4">
                    <div class=" col-12 col-md-4 col-sm-12 ">
                        <a href="account-summary.php" class="text-decoration-none text-dark">
                            <div class="card bttn rounded-bottom ">
                                <div class="row p-2">
                                    <div class="col-8 text-white">
                                        <h5>Pending Payments</h5>
                                        <h5>$ 0 </h5>
                                    </div>
                                    <div class="col "><img src="assets/image/pending.webp" class="img-fluid" alt=""></div>
                                </div>
                                <div class="bg-gray rounded-bottom text-dark text-end p-1 mt-3 fw-bold">View Details <i class="bi bi-plus-circle"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class=" col-12 col-md-4 col-sm-12 ">
                        <a href="connection-status.php" class="text-decoration-none text-dark">
                            <div class="card bg-dark rounded-bottom ">
                                <div class="row p-2">
                                    <div class="col-8 text-white">
                                        <h5 class="">Connection status</h5>
                                    </div>
                                    <div class="col "><img src="assets/image/router.webp" class="img-fluid" alt=""></div>
                                </div>
                                <div class="bg-gray rounded-bottom text-end p-1 mt-3 fw-bold">View Details <i class="bi bi-plus-circle"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="container mt-5 bg-white rounded-3 p-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item text-dark" role="presentation">
                            <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Invoices</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link aa" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Usage Log</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <h5 class="mt-2 mt-2">Customer Invoices</h5>
                                <table class="table table-bordered size">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Invoice ID</th>
                                            <th scope="col" class="text-center">Invoice Number</th>
                                            <th scope="col" class="text-center">Date</th>
                                            <th scope="col" class="text-center">Total</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Invoice URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">3804402000004495707</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3804402000004495707</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3804402000004495707</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3804402000004495707</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3804402000004495707</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row table-row mt-2">
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
                            <div class="table-responsive mt-2">
                                <table class="table table-bordered size">
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
                                            <td class="text-center fw-bold" >Total Usage (MB): 5155.28</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <p class="m-0 mt-3 text-center text-primary">*You can use any MasterCard/VISA Debit or Credit Card to pay your Imperial bills online</p>
        </div>
    </div>
</div>




<?php include("./include/footer.php") ?>