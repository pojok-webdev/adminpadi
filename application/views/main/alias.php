<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('main/commons/head');?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('main/commons/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('main/commons/topbar');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Perbandingan Pelanggan DB vs Pelanggan Impor</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $tabletitle;?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Pel</th>
                                            <th>Alias Pel</th>
                                            <th>ID Import</th>
                                            <th>Alias Import</th>
                                            <th>Aksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Pel</th>
                                            <th>Nama Pel</th>
                                            <th>ID Import</th>
                                            <th>Nama Import</th>
                                            <th>Aksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($objs as $obj){?>
                                        <tr>
                                            <td class="client_id"><?php echo $obj->id;?></td>
                                            <td class="client_alias"><?php echo $obj->alias;?></td>
                                            <td class="import_id"><?php echo $obj->bid;?></td>
                                            <td class="import_alias"><?php echo $obj->balias;?></td>
                                            <td><button class="btn btnUpdate">Update</button></td>
                                            <td><button class="btn btnSetNonActive">Set Non Aktif</button></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('main/commons/footer');?>
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
                    <a class="btn btn-primary" href="/templates/login">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('main/commons/js');?>
<script src="/assets/padilibs/commons.js"></script>
<script>
    $('#dataTable').on('click','.btnUpdate',function(){
        tr = $(this).stairUp({level:2})
        id = tr.find('.client_id').text()
        alias = tr.find('.import_alias').text()
        $.ajax({
            url:'/processors/update',
            data:{
                tableName:'clients',
                columnName:'alias',
                columnValue:alias,
                id:id
            },
            type:'post',dataType:'json'
        })
        .done(res=>{
            console.log('Success update alias',alias,res)
            createLog({
                subject:'Update clientalias ID:'+id+'('+alias+')',
                description:'Update dari modul Admin'
            })
            tr.find('.client_alias').text(alias)
            tr.find('.client_alias').css('background-color','white')
            tr.find('.client_alias').css('color','#858796')
        })
        .fail(err=>{
            console.log('Err update alias',err)
        })
    })
    $('#dataTable').on('click','.btnSetNonActive',function(){
        tr = $(this).stairUp({level:2})
        id = tr.find('.client_id').text()
        alias = tr.find('.client_alias').text()
        console.log('clicked',$(this).stairUp({level:2}).find('.client_id').text())
        $.ajax({
            url:'/processors/update',
            data:{
                tableName:'clients',
                columnName:'active',
                columnValue:'0',
                id:id
            },
            type:'post',
            dataType:'json'
        })
        .done(res=>{
            console.log('Result',res)
            tr.remove()
            createLog({
                subject:'Penonaktifan pelanggan id:'+id+' ('+alias+')',
                description:'Penonaktifan dari modul Admin'
            })
        })
        .fail(err=>{
            console.log('Err',err)
        })
    })
    $('#dataTable tbody tr').each(function(){
        id = $(this).find('.client_id').text()
        alias = $(this).find('.client_alias').text()
        xalias = $(this).find('.import_alias').text()
        if(alias.trim()!==xalias.trim()){
            console.log(id,alias,' <> ',xalias)
            $(this).find('.client_alias').css('background-color','red')
            $(this).find('.client_alias').css('color','white')
        }
    })
</script>
</body>
</html>