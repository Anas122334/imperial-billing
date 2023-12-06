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
       
        <div class="p-4">
        <div>
            <a href="" class="btn bttn">Pay by Card*</a>
        </div>
            <div class="card-bd mt-3 p-3 rounded">
            <div class="container  bg-white rounded-3 p-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item text-dark" role="presentation">
                            <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Invoices</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive p-2">
                                <h5 class="mt-2">Customer Invoices</h5>
                                <table class="table table-bordered size mt-2 ">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">S.No.</th>
                                            <th scope="col" class="text-center">Invoice ID</th>
                                            <th scope="col" class="text-center">Invoice Number</th>
                                            <th scope="col" class="text-center">Invoice Date</th>
                                            <th scope="col" class="text-center">Amount</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Invoice URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="text-center">1</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090	</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">2</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">3</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">overdue</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">4</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">5</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">draft</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">6</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">paid</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">7</td>
                                            <td class="text-center">3804402000004495</td>
                                            <td class="text-center">INV-007090</td>
                                            <td class="text-center">2023-08-02</td>
                                            <td class="text-center">$107</td>
                                            <td class="text-center">overdue</td>
                                            <td class="text-center"><a href="">View Invoice</a></td>
                                        </tr>
                                        <tr>
                                        <td class="text-center">8</td>
                                            <td class="text-center">3804402000004495</td>
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
                    </div>

                </div>
                <p class="m-0 mt-3 text-center text-primary">*You can use any MasterCard/VISA Debit or Credit Card to pay your Imperial bills online</p>
            </div>
        </div>
    </div>




    <?php include("./include/footer.php") ?>