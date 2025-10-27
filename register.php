  <?php

  if($_SERVER["REQEUST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try{
        require_once "register.php";

        $query = "INSERT INTO users(username,email,pwd) VALUES (:username,:email, :pwd);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);
          
        $pdo = null;
        $stmt = null;

        exit();

    } catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
    }
  } elase{
    header("loacation: ../index.php")
  }