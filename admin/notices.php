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
                                    <li class="list-inline-item">Notices</li>
                                </ul>
                            </div>
                            <button class="au-btn au-btn-icon au-btn--green">
                                <i class="zmdi zmdi-plus"></i>Upload New Notice</button>
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
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="NoticeID , Name" class="form-control">
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
                                                        <th>NoticeID</th>
                                                        <th>Notice Name</th>
                                                        <th>Date Updated</th>
                                                        <th>Notice Path</th>
                                                        <th>Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>N_123</td>
                                                        <td>New Regulations</td>
                                                        
                                                        <td>02/04/2020</td>
                                                        <td>PATH//HELP.php</td>
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