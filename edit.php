<!-- File: src/Template/Posts/edit.ctp -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    label{font-size: 1.2rem;}
    input[type="text"]{height: 3.3125rem;font-size: 1.2rem;}
    .btn-default {border: black 1px solid;padding-top: .8rem;padding-right: 0.8rem;padding-bottom: .8rem;padding-left: 0.8rem;}
    .row{ margin:20px 20px 20px 20px;width: 100%;}
    .user-add-edit{width:40%;margin:10px; }
    .user-add-edit form{width:90%;}
    .glyphicon{font-size: 20px;}
    .glyphicon-arrow-left{float: right;}
    a.glyphicon{text-decoration: none;}
</style>
<h1>Edit User Data</h1>
<?php
include 'dbclass.php';
$db = new DB();
$userData = $db->getRows('users',array('where'=>array('id'=>$_GET['id']),'return_type'=>'single'));
if(!empty($userData)){
?>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Edit User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $userData['name']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $userData['email']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $userData['phone']; ?>"/>
                </div>
                <input type="hidden" name="id" value="<?php echo $userData['id']; ?>"/>
                <input type="hidden" name="action_type" value="edit"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Update User"/>
            </form>
        </div>
    </div>
</div>
<?php } ?>
