<?php
// Initialize the session
session_start();
$checkURL = "https://ropsten.etherscan.io/tx/". htmlspecialchars($_SESSION["hash"]);
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }

@media only screen and (max-width: 1200px) {
  body {
    text-align: left;
    font-size: 4em;
  margin-left:5% !important;
    
  }
  h2 {
  font-size: 1.5em;
  }
  h1 {
  font-size: 1.5em;
  
  }
  .wrapper {
  max-width:1200px;
  }
  .form-control {
  
  font-size: 1em;
  }
  .btn {
  font-size: 1.1em;
  height: 2.2em;
  text-align: center;
  }
  td {
  font-size: 1.3em;
  }
  .tabel {
   overflow-x: auto !important;
  }
  .ov {
   overflow-x: auto !important;
  }

}

    </style>
</head>
<body>
    <div class="wrapper">
    
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <h2 class="my-5">Your role is <b><?php echo htmlspecialchars($_SESSION["role"]); ?></b>.</h2>
    <h2 class="my-5 ov">Your certificate hash is <?php echo "<a href=\"$checkURL\">";?><b><?php echo htmlspecialchars($_SESSION["hash"]); ?></b></a>.</h2>
    <h2 class="my-5 ov">Download certificate here : <b><?php echo htmlspecialchars($_SESSION["hash"]); ?></b>.</h2>
    
    <?php
    if($_SESSION["role"] == "Admin"){
    
    echo "<div class=\"tabel\"><table class=\"\" style='margin-left: auto; margin-right: auto;'>";
 echo "<tr><th>Username</th><th>Role</th><th>Certificate hash</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

// Include config file
require_once "config.php";

$servername = DB_SERVER;
$dbname = DB_USERNAME;
$username = DB_PASSWORD;
$password = DB_NAME;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username, role, hash FROM user_pjpb");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table></div><br><br>";
    
    
    }
    
    
    ?>
    
    <p>
        <a href="reset-password.php" class="btn btn-warning ml-5">Reset Your Password</a><br><br>
        <a href="logout.php" class="btn btn-danger ml-5">Sign Out of Your Account</a>
    </p>
    </div>
</body>
</html>