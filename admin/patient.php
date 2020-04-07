<?php require_once APPROOT.'/views/includes/headn.html';?>

<?php include 'headd.html';?>



<section class="au-breadcrumb m-t-0">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Patients Data</li>
                                </ul>
                            </div>
                            <a href = "<?php echo URLROOT; ?>Patient/updateData" class="au-btn au-btn-icon au-btn--green">
                                <i class="zmdi zmdi-plus"></i>Update Patients Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    
    <div class="page-content--bgf7 ">
    

                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="Patient ID" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>

                             <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-0">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>PatientID</th>
                                                        <th>Status</th>
                                                        <th>District</th>
                                                        <th>Date Updated</th>

                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>P_123</td>
                                                        <td class="process">Recovered</td>
                                                        <td>Dehradun</td>
                                                        <td>02/04/2020</td>
                                                        <td><a class="btn-sm btn-danger">Edit</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                </div>
</div>


<?php require_once APPROOT.'/views/includes/footer.php';?>