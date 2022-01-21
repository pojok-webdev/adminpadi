<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templated/commons/head');?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('templated/commons/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('templated/commons/topbar');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-right">
                                <h1 class="h4 text-gray-900 mb-4">Form 2</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-2"><label for="exampleFirstName">First Name</label></div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-2"><label for="exampleLastName">Last Name</label></div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"><label for="exampleInputPassword">Password</label></div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="password" class="form-control"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-2"><label for="exampleRepeatPassword">Password</label></div>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button class="btn btn-primary  ">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('templated/commons/footer');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('templated/commons/js');?>
</body>
</html>