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
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $question = $_POST["question"];


        $query = "INSERT INTO client_question (fname, lname, email, contact, question) 
        VALUES (:fname,:lname,:email,:contact,:question)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':lname', $lname);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':contact', $contact);
        $statement->bindParam(':question', $question);
        $statement->execute();

        //echo "Data inserted successfully!>";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    //header("Location: ../index.php");
    //exit;
}
if($query){
    ?>
    <script type="text/javascript">
        alert("Your question has been submitted successfully");
       window.open("../index.php","_self");
    </script>
    <?php
}