<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$recipe_name_value =  sanitize_value($_POST['recipe_name']);
$servings_value = sanitize_value($_POST['servings']);
$total_time_value = sanitize_value($_POST['total_time']);
$instructions_value = sanitize_value($_POST['instructions']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$description_value = sanitize_value($_POST['description']);
$image_path_value = sanitize_value($_POST['image_path']);

$result = add_recipe(
    $recipe_name_value,
    $servings_value,
    $total_time_value,
    $instructions_value,
    $ingredients_value,
    $description_value,
    $image_path_value

);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}

?>