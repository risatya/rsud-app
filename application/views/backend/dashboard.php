<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <meta http-equiv="refresh" content="60" />

    <title>Dashboard multiple login</title>

  </head>

  <body>

    <?php echo $usersession->nama; ?>
    <?php echo $level; ?>
        <h1>Selamat Datang <a href="<?php echo base_url()?>backend/auth/logout">logout</a> </h1>
		
		
		 <?php if($usersession->user_level == "1") { ?>
<br/>
    Administrator

<?php } else if($usersession->user_level == "2") { ?>
<br/>
    user

<?php } else { ?>

<br/>
    <a href="<?php echo site_url('login/logout');?>">Logout</a>

<?php } ?>
		
		
  </body>

</html>