<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();
if (isset($user)) {
 /* echo sprintf('<li>Welcome, %s! (<a href="%s">sign out</a>)',
               $user->getNickname(),
               UserService::createLogoutUrl('/')); */
?>	
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $user->getNickname() ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="main.php?p=useredit">My Account</a></li>
                <li><a href="<?= UserService::createLogoutUrl('/') ?>">Logout</a></li>
              </ul>
            </li>			
<?php	
   if(UserService::isCurrentUserAdmin()){
     include("menu_admin.php"); 
   }
} else {
  echo sprintf('<li><a href="%s">Sign in</a>',
               UserService::createLoginUrl('/'));
}
?>
