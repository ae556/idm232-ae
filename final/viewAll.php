<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);

?>


<div class="">
    <div class="">
        <div class="">
            <h1 class="">All Recipes</h1>
        </div>
    </div>    
</div>

    
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                    <!-- <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th> -->
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 ">image</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 ">recipe title</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 ">total time</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">description</th> 
                    <!-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">ingredients</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">instructions</th> --> 

                    <!-- <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">a</span>
                    </th> -->
                    </tr>
                </thead>
            <?php include __DIR__ . '/_components/recipeCards.php'; ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<!-- php

$recipes = array(
  "Tuscan Chicken & Green Lentil Stew",
  "Top Chef Seared Grassfed Steaks",
  "Top Chef Ginger-Marinated Grassfed Steaks
  with Stir-Fried Vegetables & Jasmine Rice",
  "Tilapia & Black Lentil Salad
  with Lemon Pan Sauce",
  "Togarashi Chicken Lettuce Cups
  with Orange & Radishes",
  "Thai Curry Chicken
  with Carrots & Bok Choy",
  "Spicy Pork & Korean Rice Cakes
  with Bok Choy",
  "Sweet & Sour Vegetable Stir-Fry
  with Fried Eggs & Peanuts",
  "Spicy Chicken Quesadillas
  with Beet & Orange Salad",
  "Smoked Gouda & Mushroom Flatbread
  with Endive & Apple Salad",
  "Shrimp Fra Diavolo
  with Lumaca Rigata Pasta",
  "Shiitake & Hoisin Beef Burgers
  with Miso Mayonnaise & Roasted Sweet Potatoes",
  "Seared Steaks & Garlic Butter
  with Oven Fries",
  "Seared Chicken & Mashed Potatoes
  with Maple-Glazed Carrots",
  "Salmon & Honey-Glazed Carrots
  with Lemon-Saffron Yogurt Sauce",
  "Roasted Turkey Breast & Farro- Endive Salad
  with Brown Butter Apple Compote",
  "Roasted Squash Curry
  with Crispy Mung Beans & Jasmine Rice",
  "Roasted Red Pepper Pasta
  with Lemon-Parmesan Broccoli",
  "Roasted Pork & Broccoli
  with Apple, Cheese Sauce, & Garlic Breadcrumbs",
  "Roasted Chicken & Fall Vegetables
  with Cranberry & Ginger Compote",
  "Roasted Cauliflower Salad
  with Caper Brown Butter & Parmesan Breadcrumbs",
  "Roasted Brussels Sprout & Freekeh Salad
  with Lemon Yogurt & Barrel-Aged Feta",
  "Roasted Broccoli & Fregola Sarda Salad
  with Hard-Boiled Eggs & Tahini Dressing",
  "Pork Chorizo Tacos
  with Cheesy Roasted Potatoes",
  "Parmesan-Crusted Chicken
  with Mashed Sweet Potatoes & Roasted Broccoli",
  "Pimento Cheeseburgers
  with Sweet Potato Oven Fries",
  "Mushroom & Potato Tacos
  with Romaine & Orange Salad",
  "Kale & Ricotta Quiche
  with Romaine, Apple, & Almond Salad",
  "Mexican-Spiced Barramundi
  with Kale, Sweet Potato, & Avocado Salad",
  "Honey-Butter Barramundi
  with Za'atar Roasted Vegetables",
  "General Tso's Chicken
  with Bok Choy & Jasmine Rice",
  "Hoisin-Glazed Pork Chops
  with Stir-Fried Vegetables & Wonton Noodles",
  "Crispy Fish Sandwiches
  with Tartar Sauce & Roasted Sweet Potato Wedges",
  "Cheesy Enchiladas Rojas
  with Mushrooms & Kale",
  "Bucatini & Tomato Sauce
  with Roasted Broccoli",
  "Broccoli & Basil Pesto Sandwiches
  with Romaine & Citrus Salad",
  "Broccoli & Mozzarella Calzones
  with Caesar Salad",
  "Broccoli & Mozzarella Calzones
  with Caesar Salad",
  "Beef Medallions & Mushroom Sauce
  with Mashed Potatoes",
  "Ancho-Orange Chicken
  with Kale Rice & Roasted Carrots",
);



echo "<table style='margin-left: 30px;'>\n";
echo "<tr><th>Recipe</th></tr>\n";
for ($i = 0; $i < 40; $i++) {
  echo "<tr><td>" . $recipes[$i] . "</td></tr>\n";
}
echo "</table>\n";

?> -->

<?php include_once __DIR__ . '/_components/footer.php';

