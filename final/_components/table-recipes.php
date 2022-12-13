<?php
if (!isset($recipes)) {
  // echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <!-- <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th> -->
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">image</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">recipe title</th>
      <!-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">image</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">ingredients</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">instructions</th> -->

      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($recipes = mysqli_fetch_array($result)) {
    echo "
          <tr>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['recipe_name']} </td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['servings']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['total_time']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['instructions']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['ingredients']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['description']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipes['image_path']}</td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipes['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipes['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>