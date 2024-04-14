<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_name = "trust";
    $db_user = "root";
    $db_pass = "";

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $subscribe = $_POST["subscribe"];
       

        $query = "INSERT INTO client_subscribe (subscribe) 
        VALUES (:subscribe)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':subscribe', $subscribe);
        $statement->execute();

        //echo "Data inserted successfully!";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    //header("Location: ../index.php");
    //exit;
}
if($query){
    ?>
    <script type="text/javascript">
        alert("Thank you for your subscription!");
       window.open("../index.php","_self");
    </script>
    <?php
}