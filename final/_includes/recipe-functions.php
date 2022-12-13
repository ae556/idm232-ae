<?php
/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_recipe($recipe_name, $servings, $total_time, $instructions, $ingredients, $description, $image_path)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_name, servings, total_time, instructions, ingredients, description, image_path)';
    $query .= " VALUES ('$recipe_name', '$servings', '$total_time', '$instructions', '$ingredients', '$description', '$image_path')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Get user by id
 * @param integer $id
 * @return Array or false
 */
function get_recipe_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM recipes WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $recipe = mysqli_fetch_assoc($result);
        return $recipe;
    } else {
        return false;
    }
}

/**
 * Delete user by the user id
 *
 * @param integer $id
 * @return object - mysqli_result
 */
function delete_recipe_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM recipes WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Edit existing user
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @param string $id_value - user ID
 * @return object - mysqli_result
 */
// function edit_recipe($recipe_name, $servings, $total_time, $instructions, $ingredients, $description, $image_path)
// {
//     global $db_connection;
//     $query = 'UPDATE recipes';
//     $query .= " SET first_name = '{$first_name_value}', last_name = '{$last_name_value}', email = '{$email_value}', phone = '{$phone_value}'";
//     $query .= " WHERE id = {$id_value}";
//     $result = mysqli_query($db_connection, $query);
//     return   $result;
// }

// function verify_password($password)
// {
//     global $db_connection;
//     $query = "SELECT password FROM users WHERE id = {$_SESSION['user']['id']}";
//     $result = mysqli_query($db_connection, $query);
//     $password = mysqli_fetch_assoc($result);
//     return password_verify($_POST['password'], $password['password']);
// }

// function get_user_by_email_and_password($email, $password)
// {
//     global $db_connection;
//     $query = "SELECT * FROM users WHERE email = '$email'";
//     $result = mysqli_query($db_connection, $query);

//     if ($result->num_rows > 0) {
//         $user = mysqli_fetch_assoc($result);
//         $existing_hashed_password = $user['password'];
//         $isPasswordCorrect = password_verify($password, $existing_hashed_password);
//         if ($isPasswordCorrect) {
//             return $user;
//         } else {
//             return false;
//         }
//     } else {
//         return false;
//     }
// }