

<?php
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 

  $i=1;
  echo '<section id="portfolio">';
      echo '<div class="container">';
	 echo ' <div class="row">
                <div class="col-lg-12 text-center">';
                 echo " <h2>สินค้ากลุ่ม  $grec[name]</h2>";
                  echo '   <hr class="star-primary">
                </div>
            </div>
	<div class="row">';
 foreach($list as $pid=>$prec){
		$imgtag="";
	 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
		 $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>120]);
		 $imgtag = "<img src ='$img' class='img-responsive'>";
		 $imgtag2 = "<img src ='$img' class='img-centered' height='500'>";
		
	 }
              echo ' <div class="col-sm-4 portfolio-item">';
                  echo ' <a href="#portfolioModal'.$i.'" class="portfolio-link" data-toggle="modal">';
                      echo ' <div class="caption">';
                        echo '  <div class="caption-content">';
                           echo '    <i class="fa fa-search-plus fa-3x"></i>';
                         echo '  </div>';
                      echo '  </div>';
					  
                     echo "$imgtag";
                   echo ' </a>';
				   	   if(UserService::isCurrentUserAdmin()){
      echo " | <a href='main.php?p=additem&g=$gid&i=$pid'>Edit</a>";
   }
              echo ' </div>';
			 $i++;
			  }
			   echo ' </div>';
			  echo ' </div>';
			  echo ' </section>';
			  
			  $i=1;
			    foreach($list as $pid=>$prec){
		$imgtag="";
	 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
		 $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>120]);
		 $imgtag = "<img src ='$img' class='img-responsive'>";
		 $imgtag2 = "<img src ='$img' class='img-centered' height='500'>";
	 }
	echo '<div class="portfolio-modal modal fade" id="portfolioModal'.$i.'" tabindex="-1" role="dialog" aria-hidden="true">';
       echo '<div class="modal-content">';
          echo '<div class="close-modal" data-dismiss="modal">';
             echo '<div class="lr">';
                 echo ' <div class="rl">';
                  echo ' </div>';
               echo '</div>';
           echo '</div>';  
          echo '<div class="container">';
               echo ' <div class="row">';
                  echo '  <div class="col-lg-8 col-lg-offset-2">';
                      echo '  <div class="modal-body">';				 
   echo "<h2>$prec[name]</h2>";
    echo '<hr class="star-primary">';
		 echo " $imgtag2
		
		 <h3>==== รายละเอียดเกมส์ ====</h3>
		 $prec[detail] 
		 "; 	  
		 echo ' <ul class="list-inline item-details">';
                              echo '   <li>Client:';
                                     echo '<strong><a href="http://startbootstrap.com">Start Bootstrap</a>';
                                    echo ' </strong>';
                               echo '  </li>';
                                echo ' <li>Date:';
                                    echo ' <strong><a href="http://startbootstrap.com">April 2014</a>';
                                   echo '  </strong>';
                                echo ' </li>';
                                 echo '<li>Service:';
                                    echo ' <strong><a href="http://startbootstrap.com">Web Development</a>';
                                    echo ' </strong>';
                                 echo '</li>';
                           echo '  </ul>';
                          echo'  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>';
					echo '</div>';
				echo '</div>';
            echo '</div>';
          echo '</div>';
       echo '</div>';
  echo '</div>'; 
 
  $i++;
  
 }

 if(UserService::isCurrentUserAdmin()){
    echo "<a href='main.php?p=additem&g=$gid'>Add</a>";
 }
 ?>
