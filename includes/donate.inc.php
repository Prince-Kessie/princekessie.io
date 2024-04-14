
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_name = "trust";
    $db_user = "root";
    $db_pass = "";

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $amount = $_POST["amount"];
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $comment = $_POST["comment"];
        
        
        $query = "INSERT INTO donation (amount, fullname, email, phone, address, comment) 
        VALUES (:amount,:fname,:email,:phone,:address,:comment)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':amount', $amount);
        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':address', $address);
        $statement->bindParam(':comment', $comment);
        $statement->execute();

        echo "Data inserted successfully!";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
		header("Location: ../method.php");
	exit;
}
?>

