<?php
include "header.php"
?>
<!-- Button trigger modal -->
<div style="text-align: right">
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
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
            <div class="modal-body row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>URL</label>
                        <input class="form-control" name="url">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password">
                    </div>
                </div>
                <form role="form">
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">
                Default Panel
            </div> -->
            <div class="panel-body">
                
            </div>
            <div class="panel-footer">
                <div>
                    <div>websiste</div>
                    <div>username</div>
                </div>
                <button><i class="fa fa-pencil" aria-hidden="true"></i></button>
                <button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php"
?>