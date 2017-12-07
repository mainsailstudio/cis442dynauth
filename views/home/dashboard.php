<!-- Button trigger modal -->
<div style="text-align: right; margin-top: 20px; margin-right: 20px;">
    <button class="btn btn-primary btn-lg" id="add-btn" data-toggle="modal" data-target="#myModal">
    Add Password
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">New Password
                </h4>
            </div>
            <form id="passwordForm" role="form" method="post" action="/addPassword">
                <input type="text" hidden="hidden" name="cid" value="<?= $_SESSION['is_logged_in']['customer_id']; ?>" >
                <input type="text" name="sid" hidden="hidden" <?php if ($viewbag['password']): ?>
                               value = "<?= $viewbag['password']['site_id']; ?>"
                            <?php endif ?>>
               
            <div class="modal-body row">
                <div class="col-sm-12">
                    
                        <div class="form-group">
                            <label>URL</label>
                            <input id="url" class="allfields form-control" name="url" <?php if ($viewbag['password']): ?>
                               value = "<?= $viewbag['password']['url']; ?>"
                            <?php endif ?>>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" class="allfields form-control" name="name" <?php if ($viewbag['password']): ?>
                               value = "<?= $viewbag['password']['name']; ?>"
                            <?php endif ?>>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input id="username" class="allfields form-control" name="username" <?php if ($viewbag['password']): ?>
                               value = "<?= $viewbag['password']['username']; ?>"
                            <?php endif ?>>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" class="allfields form-control" name="password" <?php if ($viewbag['password']): ?>
                               value = "<?= $viewbag['password']['password']; ?>"
                            <?php endif ?>>
                        </div>
                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="container">
    <div class="row">
        <?php foreach ($viewbag['passwords'] as $key => $value): ?>
            <div class="col-sm-3">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    Default Panel
                </div> -->
                <div class="panel-body">
                    <div class="widget-img">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="info col-sm-6">
                            <div class="web"> <?= parse_url($value['url'])['host'] ?></div>
                            <div class="username"><?= $value['username'] ?></div>
                        </div>
                        <div class="button col-sm-6">

                            <form class="line" method="post" action="/dashboard">
                                <input type="text" name="sid" hidden="hidden" value="<?= $value['site_id']  ?>">
                                <input type="text" name="cid" hidden="hidden" value="<?= $value['customer_id']  ?>">
                                <button class="edit-btn" data-id="<?= $value['site_id']  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            </form>
                            <form class="line" method="post" action="/deleteSite">
                                <input type="text" name="sid" hidden="hidden" value="<?= $value['site_id']  ?>">
                                <input type="text" name="cid" hidden="hidden" value="<?= $value['customer_id']  ?>">
                                <button data-id="<?= $value['site_id']  ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        
    </div>
    
</div>

<script type="text/javascript">
     $(window).on('load',function(){
        <?php if ($viewbag['password']): ?>
            
            $('#passwordForm').attr('action', '/updatePassword')
            $('#myModal').modal('show');
        <?php endif ?>
        
    });
</script>