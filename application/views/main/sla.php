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
                    <h1 class="h3 mb-2 text-gray-800">Perbandingan SLA db vs SLA Impor</h1>
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
                                            <th>Nama</th>
                                            <th>SLA DB</th>
                                            <th>SLA import</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID Pel</th>
                                            <th>Nama</th>
                                            <th>SLA DB</th>
                                            <th>SLA import</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($objs as $obj){?>
                                        <tr>
                                            <td class="client_id"><?php echo $obj->id;?></td>
                                            <td class="user_name"><?php echo $obj->name;?></td>
                                            <td class="asla"><?php echo $obj->asla;?></td>
                                            <td class="bsla"><?php echo implode(",",explode(" ",$obj->bsla));?></td>
                                            <td><button class="btn btnUpdate">Update</button></td>
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
    if(haveSameContents([21,2,3],[2,3,21])){
        console.log('Have Same Contents')
    }else{
        console.log('dont have same contents')
    }
    $('#dataTable').on('click','.btnUpdate',function(){
        tr = $(this).stairUp({level:2})
        id = tr.find('.client_id').text()
        hunter_id = tr.find('.hunter_id').text()
        hunter_name = tr.find('.hunter_name').text()
        $.ajax({
            url:'/processors/update',
            data:{
                tableName:'clients',
                columnName:'user_id',
                columnValue:hunter_id,
                id:id
            },
            type:'post',dataType:'json'
        })
        .done(res=>{
            console.log('Success update alias',hunter_id,res)
            createLog({
                subject:'Update clienthunter ID:'+id+'('+hunter_id+' / '+hunter_name+')',
                description:'Update dari modul Admin'
            })
            tr.find('.user_id').text(hunter_id)
            tr.find('.user_id').css('background-color','white')
            tr.find('.user_id').css('color','#858796')
        })
        .fail(err=>{
            console.log('Err update user_id',err)
        })
    })
    $('#dataTable tbody tr').each(function(){
        id = $(this).find('.client_id').text()
        asla = $(this).find('.asla').text()
        bsla = $(this).find('.bsla').text()
        if(!haveSameContents(asla.split(','),bsla.split(','))){
            console.log(id,asla,' <> ',bsla)
            $(this).find('.asla').css('background-color','red')
            $(this).find('.asla').css('color','white')
        }
    })
</script>
</body>
</html>