<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('common/head');?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('common/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view('common/topnavbar');?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Save to disk</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row pics">
                        <?php foreach($objs as $obj){?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <img width="300" src="<?php echo $obj->img;?>" alt="" srcset="">    
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <button class="btn btn-primary saveToDisk" myid="<?php echo $obj->id;?>">Save to disk</button>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php $this->load->view('common/footer');?>
        </div>
    </div>
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
                    <a class="btn btn-primary" href="/">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('common/bottomscripts');?>
    <script>
        $.fn.stairUp = function(options){
            var settings = $.extend({level:1},options)
            var out = $(this)
            for(c=0;c<settings.level;c++){
                out = out.parent()
            }
            
            return out
        }
        updateRow = (obj,callback) => {
            $.ajax({
                url:'/surveys/updaterow',
                type:'post',
                dataType:'json',
                data:{
                    id:obj.id,path:obj.imagename+'.jpg',imgondisk:'1'
                }
            })
            .done(res=>{callback(res)})
            .fail(err=>{callback(err)})
        }
        saveToDisk = function(obj){
            $.ajax({
                url:'/surveys/save_image',
                type:'post',
                dataType:'json',
                data:obj
            })
            .done(res=>{
                console.log('Sukses',res)
                updateRow(obj,res=>{
                    console.log(res)
                })
            })
            .fail(err=>{
                console.log('Failed',err)
            })
        }
        $('.pics').on('click','.saveToDisk',function(){
            console.log('saveToDisk invoked')
            id = $(this).attr("myid")
            tr = $(this).stairUp({level:2})
            src = tr.find('img').attr('src')
            dt = new Date()
            saveToDisk({imagename:dt.getTime(),image:src,id:id})
            console.log('SRC',src)
        })
    </script>
</body>

</html>