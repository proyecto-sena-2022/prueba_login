<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $nombres = $_POST['nombres'];
    $password = $_POST['password'];
  
 
 
    $query = $connection->prepare("SELECT * FROM personal WHERE nombres=:nombres");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">nombres password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>