<!-- File: src/Template/Posts/add.ctp -->
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
<h1>Add User Data</h1>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Add User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone"/>
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Add User"/>
            </form>
        </div>
    </div>
</div>
