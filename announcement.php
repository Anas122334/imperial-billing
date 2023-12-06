<?php include("./include/header.php") ?>

<div class="container">
   <?php include("./include/status-bar.php")?>
</div>
<div class="container mb-4">
    <div class="card border rounded-3 ">
        <div class="card-head bg-red rounded text-white pad d-flex justify-content-between">
            <span class="fs-5 fw-bold">Announcement List</span>
            <a href="dashboard.php" class="text-decoration-none text-white"><i class="bi bi-x-lg fw-bold"></i></a>
        </div>
        <div class="p-4">
            <div class="card-bd  ">
            <div class="table-responsive">
                                <table class="table table-bordered size">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center bg-dark text-white">Announcement</th>
                                            <th scope="col" class="text-center bg-dark text-white">Title</th>
                                            <th scope="col" class="text-center bg-dark text-white">Description</th>
                                            <th scope="col" class="text-center bg-dark text-white">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">--------------</td>
                                            <td class="text-center">-------------</td>
                                            <td class="text-center">----------</td>
                                            <td class="text-center"><a href="view-announcement.php">View Detail</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
            </div>
            <p class="m-0 mt-3 text-center text-primary">*You can use any MasterCard/VISA Debit or Credit Card to pay your Imperial bills online</p>
        </div>
    </div>
</div>




<?php include("./include/footer.php") ?>