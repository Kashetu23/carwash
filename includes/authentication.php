<?php
// check if user is logged in
if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
} else {
    $userExists = check_user_exists($_SESSION['user_id']);
    if (!$userExists){
        //delete session
        session_destroy();
        header('Location: login.php');
        exit();
    }



}

//function to check if user is in database
function check_user_exists($user_id) {
    // Create a new instance of the DB class
    $db = new DB();

    // Get the user id from the session
    $user_id = $_SESSION['user_id'];

    // Get the user's data from the database
    return $db->userExists($user_id);
}

?>

