<html>
<head>
<title>SQL in PHP</title>
</head>
<body>
  
<?php 
    
    require_once 'login.php'; //login info
    $conn = new mysqli($hn, $un, $pw, $db); //opens connection between PHP and MySQL
    if ($conn->connect_error) die("Fatal Error"); // checking connection

    if (isset($_POST['delete']) && isset($_POST['player_id'])) //deleting data
    {
        $player_id = get_post($conn, 'player_id');
        $query = "DELETE FROM players WHERE player_id='$player_id'";
        $result = $conn->query($query);
        if (!$result) echo "DELETE failed<br><br>";
    }

    if (isset($_POST['player_id']) &&  //if all these fields are satisfied then assignments start
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['first_name']) &&
        isset($_POST['last_name']))
    {
        $player_id = get_post($conn, 'player_id');
        $username = get_post($conn, 'username');
        $password = get_post($conn, 'password');
        $first_name = get_post($conn, 'first_name');
        $last_name = get_post($conn, 'last_name');
        $query = "INSERT INTO players VALUES" .
           "('$player_id', '$username', '$password', '$first_name', '$last_name')";
        $result = $conn->query($query);
        if (!$result) echo "INSERT Failed: That Player ID is unavailable.<br><br>";
    }

echo <<<_END
<form action="SqlFromPHP.php" method="post"><pre>
Player ID   <input type="text" name="player_id">
Username    <input type="text" name="username">
Password    <input type="text" name="password">
First Name  <input type="text" name="first_name">
Last Name   <input type="text" name="last_name">
            <input type="submit" value="ADD CLIENT">
</pre></form>
_END;

    $query = "SELECT * FROM players";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");

    $rows = $result->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
    $row = $result->fetch_array(MYSQLI_NUM);

    $r0 = htmlspecialchars($row[0]);
    $r1 = htmlspecialchars($row[1]);
    $r2 = htmlspecialchars($row[2]);
    $r3 = htmlspecialchars($row[3]);
    $r4 = htmlspecialchars($row[4]);

echo <<<_END
<pre>
Player ID     $r0
Username      $r1
Password      $r2
First Name    $r3
Last Name     $r4
</pre>

<form action='SqlFromPHP.php' method='post'>
<input type='hidden' name='delete' value='yes'>
<input type='hidden' name='player_id' value='$r0'>
<input type='submit' value='DELETE CLIENT'></form>
_END;
    }

    $result->close();
    $conn->close();

    function get_post($conn, $var)  
    {
    return $conn->real_escape_string($_POST[$var]);
    } 

?>

</body>
</html>