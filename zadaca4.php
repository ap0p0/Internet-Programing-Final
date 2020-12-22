<?php
session_start();
if(isset($_GET['session'])){
    $oper = $_GET['session'];

    switch($oper){

        case 1:
            if(isset($_POST['sId']) && !empty($_POST['sId'])){
                
            $sessionName = 'sIndex';
            $sessionValue = $_POST['sId'];

            
            $_SESSION['sIndex'] = $sessionValue;

            
		
                echo "session is set<br>";  
                
            echo "<form action='sessionSimulator.php?session=2' method='POST'>";
                echo "<a href='sessionSimulator.php?session=3'>Read Value</a><br>";
                echo "<button type='submit'>Delete</button>";
            echo "</form>";
            }
        break;

        case 2:
            session_destroy ();
            echo "session is deleted<br>";
            echo "<a href='sessionSimulator.php'>Go Back</a>";
        break;

        case 3:
            if(isset($_SESSION['sIndex'])){
            echo "session value is: ";
            echo $_SESSION['sIndex'];
            echo "<form action='sessionSimulator.php?session=2' method='POST'>";
                echo "<a href='sessionSimulator.php'>Modify</a><br>";
                echo "<button type='submit' value='submit'>Delete</button>";
            echo "</form>";
        }else{
            echo "there are no sessions set";
            echo "<a href='sessionSimulator.php'>Go back</a>";
        }

        break;

        default:
        session_destroy ();
        echo "<form action='sessionSimulator.php?session=1' method='POST'>";
            echo "Your ID:<input type='text' name='sId' id='sId'><br>";
            echo "<input type='submit' value='submit'>";
        echo "</form>";
        break;
    }

}else{

    echo "<form action='sessionSimulator.php?session=1' method='POST'>";
        echo "Your ID:<input type='text' name='sId' id='sId'><br>";
        echo "<input type='submit' value='submit'>";
    echo "</form>";
    
}
