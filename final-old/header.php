<?php


if(isset($page_title)) {
     $page_title = $page_title . ' | IDM 232';
}
$site_title = 'Kazi's Kitchen';
$document_title = $page_title . ' | ' . $site_title;
?>        
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" href="<?php echo $app['url'];?>/dist/images/favicon.ico" type="image/x-icon"/>    
     <link href="<?php echo $app['url'];?>/dist/css/desktop.css" rel="stylesheet" type="text/css" media="all">
     <link href="<?php echo $app['url'];?>/dist/css/mobiletablet.css" rel="stylesheet" type="text/css" media="all">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $page_title;?></title>
     <script src="https://cdn.tiny.cloud/1/wdm8q2l8smvt9ds82bijhu6cfdzzhhr4otlvqmrwsmytgndc/tinymce/5/tinymce.min.js" 
     referrerpolicy="origin"></script>
     <script>
     tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
     });
     </script>
</head>
<body style="background-color: #F8FFC6;">
     <header>
          <h1>LIAM'S HOMEMADE GRUB</h1>
          <div class="mainmenu">
               <a href="<?php echo $app['url'];?>" class="mainmenu_item">Home</a>
               <a href="<?php echo $app['url'];?>/categories/" class="mainmenu_item">Categories</a>
               <a href="<?php echo $app['url'];?>/admin/" class="mainmenu_item">Admin</a>
          </div>
     </header>
<body>