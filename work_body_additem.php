<?php
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 if(!UserService::isCurrentUserAdmin()){
     echo "คุณไม่มีสิทธิ์ แก้ไข";
     return;
 }
 include_once("config.php");  
 global $appid,$db;  
 $prec = [];
 $gid=$_GET['g'];
 $pid="";
 if(isset($_GET['i'])){
   $pid=$_GET['i'];
   if(isset($db['items'][$gid][$pid]))
       $prec=$db['items'][$gid][$pid];
 }
?>
<form method="post" action="saveitem.php" enctype="multipart/form-data">
<div class="form-group col-md-2" >
 <label for="gid">Group Id</label>
 <input class="form-control" type='text' name='gid' value="<?= $gid ?>">
</div>
<div class="form-group col-md-2" >
 <label for="pid">Game Id</label>
 <input class="form-control" type='text' name='pid' value="<?= $pid ?>">
</div>

<div class="form-group col-md-6">
<label for="name">Game Name</label>
<input class="form-control" type='text' name='name' value="<?= $prec[name] ?>">
</div>

<div class="form-group col-md-6">
<label for="file">Game Picture</label>
<input class="form-control" type='file' name='pic'>
</div>
<div class="form-group col-md-6">
<label for="detail">Game Detail</label>
<textarea class="form-control" name='detail' rows=15><?= htmlspecialchars($prec['detail']) ?></textarea>
</div>
<div class="form-group col-md-12">
<button class="btn btn-primary"> Save </button>
</div>
</form>

