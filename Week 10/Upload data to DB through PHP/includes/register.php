    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"]; 
    $pwd = $_POST["pwd"]; 
    $email = $_POST["email"]; 
    try { require_once "db.php"; 
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
    $pdo = getDB();
    $stmt = $pdo->prepare($query);
    $stmt->execute([
    ':username' => $username,
    ':pwd' => $pwd,
    ':email' => $email
    ]);
    $pdo = null;
    $stmt = null; //closing the connection 
    header("Location: ../index.php"); 
    die(); 
    } catch (PDOException $e) { 
    throw new PDOException($e->getMessage()); }
     } else { 
     header("Location: ../index.php"); 
     }
