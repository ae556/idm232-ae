<?php
// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = 'Alex\s Eats';
}
$site_title = 'Alex\s Eats';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Including TinyMCE Library -->
  <script src="https://cdn.tiny.cloud/1/7rpnj47it93x8jhvzo8vbgdulo0j4qdj5xdmud6xc46gy8fb/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
  <!-- Including TailwindCss Library -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>
  <!-- Main Content Begins -->
  <div class="max-w-7xl flex justify-between mx-auto">
  <nav class="text-black flex items-center">
            <a href="<?php echo site_url(); ?>/">Home</a>
            <a href="<?php echo site_url(); ?>/viewAll.php">Recipes</a>
            <a href="<?php echo site_url(); ?>/admin/recipes/index.php">Admin</a>
  </nav>
    </div>