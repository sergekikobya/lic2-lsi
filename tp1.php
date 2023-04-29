<!DOCTYPE html>
<html class="light" style="color-scheme: light;"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>COURS DE PHP: Travail Pratique 1</title>
<meta name="next-head-count" content="3">
<link rel="apple-touch-icon" sizes="180x180" href="icon.png">


<link rel="stylesheet" href="http://localhost:8888/lic3plsiliage2023/css/tp1.css" data-n-g="">

</head>
<body>
<div id="__next">

<div class="overflow-hidden w-full h-full relative flex">
<div class="dark hidden bg-gray-900 md:flex md:w-[260px] md:flex-col"><div class="flex h-full min-h-0 flex-col ">
<div class="scrollbar-trigger flex h-full w-full flex-1 items-start border-white/20">

<nav class="flex h-full flex-1 flex-col space-y-1 p-2">
<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Série des exercices</a>

<div>
<a href="tp1.php?cible=add2nbre" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
<div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">Addition 2 nombres</div></a>
</div>


<div>
<a href="tp1.php?cible=plusGrand" 
class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">
    Plus grand nombre</div></a>
</div>

<div>
<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20" href="#"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">Traduction jours</div></a>
</div>

<div>
<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm mb-1 flex-shrink-0 border border-white/20" href="#"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><div class="flex-1 text-ellipsis max-h-5 overflow-hidden break-all relative">Surface Carré</div></a>
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

<a href="http://localhost:8888/lic3plsiliage2023/tp1.php" class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><span class="flex w-full flex-row justify-between"><span class="gold-new-button flex items-center gap-3"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Accueil</span><span class="rounded-md bg-yellow-200 py-0.5 px-1.5 text-xs font-medium uppercase text-gray-800">NEW</span></span></a>

<a class="flex py-3 px-3 items-center gap-3 rounded-md hover:bg-gray-500/10 transition-colors duration-200 text-white cursor-pointer text-sm"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>Déconnexion</a>

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

<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end"><div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Bienvenue</h3>
<p>Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla.<br/><br/>

Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla .<br/><br/>

J'espère que cela vous sera utile !</p>


</div></div></div>



<?php break; ?>

<?php 
case'add2nbre':
?>
<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end"><div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Addition de 2 nombres</h3>
<p>Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla.<br/><br/>

Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla .<br/><br/>

Blahbah ababaghgsnshgs.</p>


</div></div></div>
<?php 
break;
?>

<?php 
case'plusGrand':
?>
<div class="group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 dark:bg-gray-800"><div class="text-base gap-4 md:gap-6 md:max-w-2xl lg:max-w-xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0 m-auto"><div class="w-[30px] flex flex-col relative items-end"><div class="relative flex">
</div></div><div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">

<h3>Plus Grand Nombre</h3>
<p>Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla.<br/><br/>

Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla Blabla bla .<br/><br/>

Blahbah ababaghgsnshgs.</p>


</div></div></div>
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

</div></body></html>