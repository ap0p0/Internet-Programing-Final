<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../final 4259/zadaca6.css">
</head>
<body>

  <form action="index.html" method="post">
  
    <h1>Sign Up</h1>
    
    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name">
      <label for="username">Username:</label>
      <input type="text" id="username" name="user_name">
      <label for="password">Password:</label>
      <input type="password" id="password" name="user_password">
      
      <label>User Type:</label>
      <input type="radio" id="free" value="free" name="user_type1"><label for="free" class="light">Free</label><br>
      <input type="radio" id="basic" value="basic" name="user_type2"><label for="basic" class="light">Basic</label> <br>
      <input type="radio" id="premum" value="premum" name="user_type3"><label for="premuim" class="light">Premium</label><br>
    </fieldset>

    <fieldset>
      <legend><span class="number">2</span>Your profile</legend>
    </fieldset>
    <fieldset>
    <label for="city">Choose City:</label>
    <select id="city" name="user_city">
        <option value="Skopje">Skopje</option>
        <option value="Gostivar">Gostivar</option>
        <option value="Kumanovo">Kumanovo</option>
        <option value="Ohrid">Ohrid</option>
        <option value="Gevgelija">Gevgelija</option>
    </select>
    
      <label>User agreement:</label>
      <input type="checkbox" id="agree" value="agree" name="user_agree"><label class="light" for="development">I agree with everything.</label><br>
    
    </fieldset>
    <button type="submit" onclick=" ">Sign Up</button>
  </form>
  <?php
$hostname='localhost';
$username='root';
$password='';
$database='test';

$name;
$user_name;
$user_password;
$user_type = "default";
$user_city;
$agree;
// ne znam kako se proveruva za radio group
if (isset($_POST['agree'])){		
  $agree = $_POST['agree'];	

  if (isset($_POST['name'])){		
	$name = $_POST['name'];		
	}
	if (isset($_POST['user_name'])){		
	$user_name = $_POST['user_name'];		
	}
	if (isset($_POST['user_password'])){		
	$user_password = $_POST['user_password'];		
  }
	if (isset($_POST['user_city'])){		
		$user_city = $_POST['user_city'];		
  }
  }
  

		

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$name."','".$user_name."','".$user_password."','".$user_city."','".$user_type."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
  mysqli_close($mysqli);
  
  ?>

</body>
</html>