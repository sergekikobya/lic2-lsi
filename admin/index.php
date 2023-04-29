<?php require_once('./../bd/conbd.php'); ?>
<?php 
ob_start();
session_start();
if(!isset($_SESSION['user'])) {
header('location: login.php'); 
exit; 
}
?>

<!DOCTYPE html>
<html class="light" style="color-scheme: light;"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>COURS DE PHP: Zone administration</title>
<meta name="next-head-count" content="3">
<link rel="apple-touch-icon" sizes="180x180" href="icon.png">


<link rel="stylesheet" href="http://localhost:8888/lic3plsiliage2023/css/tp1.css" data-n-g="">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>

</head>
<body>
<div id="__next">

<div class="overflow-hidden w-full h-full relative flex">
<div class="dark hidden bg-gray-900 md:flex md:w-[260px] md:flex-col"><div class="flex h-full min-h-0 flex-col ">
<div class="scrollbar-trigger flex h-full w-full flex-1 items-start border-white/20">

<nav class="flex h-full flex-1 flex-col space-y-1 p-2">
<a href="#" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>Welcome</a>

<div>
<a href="index.php?cible=adduser" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg><div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">Ajout Utilisateur</div></a>
</div>

<!--
<div class="flex-col flex-1 overflow-y-auto border-b border-white/20"><div class="flex flex-col gap-2 pb-2 text-gray-100 text-sm">
<a class="flex py-3 px-3 items-center gap-3 relative rounded-md cursor-pointer break-all pr-14 bg-gray-800 hover:bg-gray-800 group"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
<div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">Addition 2 nombres</div>
</a></div></div>

<div class="absolute flex right-1 z-10 text-gray-300 visible"><button class="p-1 hover:text-white"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></button><button class="p-1 hover:text-white"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button></div>
</a></div></div>-->

<!--
<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Clear conversations</a>

<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><span class="flex w-full flex-row justify-between"><span class="gold-new-button flex items-center gap-3"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Upgrade to Plus</span><span class="rounded-md bg-yellow-200 py-0.5 px-1.5 text-xs font-medium uppercase text-gray-800">NEW</span></span></a>

<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Settings</a>

<a href="https://help.openai.com/en/collections/3742473-chatgpt" target="_blank" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Get help</a>

-->
</div>


<a href="index.php?cible=logout" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>Déconnexion</a>

</nav></div></div>
<div class="flex h-full max-w-full flex-1 flex-col">
<main class="relative h-full w-full transition-width flex flex-col overflow-hidden items-stretch flex-1">

<?php

if(isset($_GET['cible'])){
$page=$_GET['cible'];
}else{
$page='home';	
}
?>

<?php
switch($page){ 
 
case 'home':
?>

<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end">
<div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Bienvenue <u><?php echo $_SESSION['user']['email'];?></u></h3>

</div></div></div>

<?php break; ?>

<?php 
case'adduser':
?>
<?php
///STATS:
//1. Total Item
$sql = $pdo->prepare("SELECT * FROM user");
$sql->execute();
$total_user = $sql->rowCount();

//2. Somme
/* $sql = $pdo->prepare("SELECT SUM(pu) AS montant FROM produit WHERE id=?");
$sql->execute(array($id_produit));
$arr = $sql->fetch();if($arr['montant'] == ''){$montant=0;}else $montant=$arr['montant']; */
?>

<?php
if(isset($_POST['adduser'])) {
     $error='';    
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $error= 'Entrez Email & Password svp';
    } else {
		
		$photo = $_FILES['photo']['name'];
		$photo_tmp = $_FILES['photo']['tmp_name'];
		if($photo!='') {
			$ext = pathinfo( $photo, PATHINFO_EXTENSION );
			$file_name = basename( $photo, '.' . $ext );
			if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' ) {
				$error = 'Uploadez le fichier jpg, png, gif uniquement';
			}else{
			$photo_name = 'avatar-'.rand().'.'.$ext;
            move_uploaded_file( $photo_tmp, '../img/'.$photo_name );	
			}
		}else{
			$photo_name = 'avatar.png';
		}
		
		$email 		= strip_tags($_POST['email']);
		$password 	= strip_tags($_POST['password']);

    	$sql = $pdo->prepare("INSERT INTO user (email, pwd, photo) VALUES (?, ?, ?)");
    	$sql->execute(array($email, md5($password), $photo_name));
    	header("location: index.php?cible=adduser");
		//echo'<script type="text/javascript"> window.location.rel="noopener" href = \'index.php\';</script>';
	    }
    }
?>
<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end">
<div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Ajout Utilisateurs (Tot: <?php echo $total_user;?>)</h3> 
<form method="post" action="index.php?cible=search">
<table style="width:100%;"><tr>
<td><input type="text" id="q" name="q" placeholder="Rechercher un user ici..." class="form-control" style="width:100%;"></td>
<td><input type="submit" value="Rechercher" class="btn btn-warning" style="width:100%;"></td>
</tr></table>
</form>
<hr/>
<form method="post" style="display: block;" 
enctype="multipart/form-data">
<table border="0" style="width:100%;font-size:14px;" id="add_defensedepot_form" name="add_defensedepot_form">
<tbody>
<tr><td>E-mail</td><td>:</td><td><input type="email" name="email" id="email" class="form-control" required="on" placeholder="Entrer votre email" style="width:100%;"></td></tr>

<tr><td>Password</td><td>:</td><td><input type="password" name="password" id="password" class="form-control" required="on" placeholder="Entrer votre mot de passe" style="width:100%;"></td></tr>

<tr><td>Avatar</td><td>:</td><td><input type="file" name="photo" id="photo" class="form-control" style="width:100%;"></td></tr>
<tr><td colspan="4"><input type="submit" id="adduser" name="adduser" value="Ajouter" class="btn btn-primary"></td></tr>

</tbody></table>
</form>


<table id="tbl_esuivi_mvt" class="table table-bordered table-striped dataTable no-footer" border="1" style="width: 100%; font-size: 13px; border-style: solid; border-color: red; border-collapse: collapse;" role="grid" aria-describedby="tbl_esuivi_mvt_info">
					<thead>
						<tr>
						<th>Action</th>
						<th>Avatar</th>
						<th>E-mail</th>
						<th>Password</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$x=0;
					$sql = $pdo->prepare("SELECT * FROM user");
					$sql->execute();
					$total = $sql->rowCount();
					if($total>0){
					$result = $sql->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $data) {
					$x++;
						echo'<tr>
						<td><a href="index.php?cible=edit&id='.$data['id'].'">
				<button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></button></a> 
				<a href="index.php?cible=delete&id='.$data['id'].'"  onclick="return confirm(\'Are you sure you want to delete this item\')"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button></a>
                       </td>
						<td><img src="./../img/'.$data['photo'].'" style="width:40px;height:40px;border-radius: 10px 5%;"></td>
						<td>'.$data['email'].'</td>
						<td>'.$data['pwd'].'</td>
						</tr>';
					}
					}else{
					echo'<tr><td colspan="4" style="color:red;">Aucun element!</td></tr>';	
					}
					?>
					</tbody></table>

</div></div></div>
<?php break; ?>

<?php 
case'delete':
?>
<?php
if(isset($_GET['id'])) {
	$id=$_GET['id'];
    $sql = $pdo->prepare("DELETE FROM user WHERE id=?");
    $sql->execute(array($id));
    header("location: index.php?cible=adduser");
    }else{
	header("location: logout.php");
	}
?>
<?php 
break;
?>

<?php 
case'edit':
?>
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$sql = $pdo->prepare("SELECT * FROM user WHERE id=?");
	$sql->execute(array($id));
	$total = $sql->rowCount();
	if($total>0){
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $data) {	
	$id		=	$data['id'];
	$email	=	$data['email'];
	$pwd	=	$data['pwd'];
	$avatar	=	$data['photo'];
	}
	}else{
	header("Location: logout.php");		
	}
	}else{
	header("Location: logout.php");	
	}

?>
<?php
if(isset($_POST['edituser'])) {
     $error='';    
    if(empty($_POST['email']) || empty($_POST['id'])) {
        $error= 'Entrez Email & Password svp';
    } else {
		
		$email 			= strip_tags($_POST['email']);
		$id 			= strip_tags($_POST['id']);
		$old_avatar 	= strip_tags($_POST['old_avatar']);
	
		$photo = $_FILES['photo']['name'];
		$photo_tmp = $_FILES['photo']['tmp_name'];
		if($photo!='') {
			$ext = pathinfo( $photo, PATHINFO_EXTENSION );
			$file_name = basename( $photo, '.' . $ext );
			if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' ) {
				$error = 'Uploadez le fichier jpg, png, gif uniquement';
			}else{			
			//Supprimer ancien avatar s'il est different de avatar.png
			if($old_avatar!='avatar.png'){
			unlink('../img/'.$old_avatar);	
			}
				
			$photo_name = 'avatar-'.rand().'.'.$ext;
            move_uploaded_file( $photo_tmp, '../img/'.$photo_name );	
			}
		}else{
			$photo_name = $old_avatar;
		}
	
    	$sql = $pdo->prepare("UPDATE user SET email=?, photo=? 
		WHERE id=?");
    	$sql->execute(array($email, $photo_name, $id));
		
		
    	header("location: index.php?cible=edit&id=".$id."&msg='success'");
	    }
    }
?>
<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end">
<div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Edition Utilisateur</h3>

<?php if(isset($_GET['msg']) AND !empty($_GET['msg'])){
echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Felicitation!</h4>
<p class="mb-0">Edition effectuee avec succes</p>
</div>';
}
?>
<form method="post" style="display: block;" enctype="multipart/form-data">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
<input type="hidden" name="old_avatar" id="old_avatar" value="<?php echo $avatar;?>">
<table border="0" style="width:100%;font-size:14px;" id="add_defensedepot_form" name="add_defensedepot_form">
<tbody>
<tr><td>E-mail</td><td>:</td><td><input type="email" name="email" 
id="email" class="form-control" required="on" 
placeholder="Entrer votre email" style="width:100%;" 
value="<?php echo $email;?>"></td></tr>

<tr><td>Password</td><td>:</td><td><input type="password" name="password" id="password" class="form-control" required="on" placeholder="Entrer votre mot de passe" style="width:100%;" value="<?php echo $pwd;?>" disabled></td></tr>

<tr><td>Old Avatar</td><td>:</td><td><img src="./../img/<?php echo $avatar;?>" style="width:50px;height:50px;"></td></tr>

<tr><td>New Avatar</td><td>:</td><td><input type="file" name="photo" id="photo" class="form-control" style="width:100%;"></td></tr>

<tr><td colspan="4"><input type="submit" id="edituser" name="edituser" value="Editer" class="btn btn-primary"></td></tr>

</tbody></table>
</form>

</div></div></div>
<?php 
break;
?>
<?php 
case'search':
?>
<?php
if(isset($_POST['q'])){
	$q=$_POST['q'];
}else{
	header("Location: logout.php");	
	}

?>

<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end">
<div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Résultats recherche <u><?php echo $q;?></u></h3>

<table id="tbl_esuivi_mvt" class="table table-bordered table-striped dataTable no-footer" border="1" style="width: 100%; font-size: 13px; border-style: solid; border-color: red; border-collapse: collapse;" role="grid" aria-describedby="tbl_esuivi_mvt_info">
					<thead>
						<tr>
						<th>Action</th>
						<th>N°</th>
						<th>E-mail</th>
						<th>Password</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$x=0;
					$sql = $pdo->prepare("SELECT * FROM user WHERE email LIKE '%".$q."%'");
					$sql->execute();
					$total = $sql->rowCount();
					if($total>0){
					$result = $sql->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $data) {
					$x++;
						echo'<tr>
						<td><a href="index.php?cible=edit&id='.$data['id'].'">
				<button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></button></a> 
				<a href="index.php?cible=delete&id='.$data['id'].'"  onclick="return confirm(\'Are you sure you want to delete this item\')"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button></a>
                       </td>
						<td>'.$x.'</td>
						<td>'.$data['email'].'</td>
						<td>'.$data['pwd'].'</td>
						</tr>';
					}
					}else{
					echo'<tr><td colspan="4" style="color:red;">Aucun element!</td></tr>';	
					}
					?>
					</tbody></table>

</div></div></div>
<?php 
break;
?>
<?php 
case'logout':
?>
<?php 
unset($_SESSION['user']);
header("location: ./../login.php");
?>
<?php 
break;
?>
<?php
default:
echo'erreur';
header("Location: index.php");
break;
}
?>

</main></div>



</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body></html>