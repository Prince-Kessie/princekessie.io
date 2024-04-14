<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_name = "trust";
    $db_user = "root";
    $db_pass = "";

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $message = $_POST["message"];


        $query = "INSERT INTO client_contact (fullname, email, contact, message) 
        VALUES (:fname,:email,:contact,:message)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':contact', $contact);
        $statement->bindParam(':message', $message);
        $statement->execute();

            
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    //header("Location: ../index.php");
    //exit;
}
if($query){
    ?>
    <script type="text/javascript">
        alert("Message submitted successfully");
       window.open("../contact.php","_self");
    </script>
    <?php
}
