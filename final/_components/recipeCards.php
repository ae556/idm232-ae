<?php
if (!isset($recipes)) {
  // echo '$recipes variable is not defined. Please check the code.';
}
?>

  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
          <tr>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['image_path']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['recipe_name']} </td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['total_time']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['description']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>
                  <a href='{$site_url}/recipeDetail.php?id={$recipes['id']}' class='text-indigo-600 hover:text-indigo-900'>View Recipe</a>
                </td>
          </tr>";
}
?>
  