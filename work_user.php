<?php 
    // ส่วนตั้งค่า เรียกใช้งาน	UserService ของ Google  
	use google\appengine\api\users\User; 
	use google\appengine\api\users\UserService; 
	global $user,$userdata,$appid;
	$user  = UserService::getCurrentUser(); 
	if($user){ 
	$uid = $user->getUserId(); 
	$userfile  = "gs://$appid/user_$uid.json";  
	$userdata = array(); 
	if(file_exists($userfile)){ 
	// จะโหลดขอ้มลูในไฟล ์ json 
	$filedata = file_get_contents($userfile);
	$userdata = json_decode($filedata,true); 
	}else{  
	$userdata['nick']=$user->getNickname(); 
    } 
	$url = UserService::createLogoutUrl('/main.php'); 
	// แสดงภาพผู้ใช้ โดยการเรียกฟังก์ชัน userpic จากขอ้ท ี่1
	echo "<img src='".userpic($uid)."' <img src='$pic' width='180' img class='img-circle'><br>";  
	echo $userdata['nick'];  
    }else{
		$url = UserService::createLoginUrl('/main.php'); 
	  }  
?> 