    <?php      

 $servername = "";
$username = "";
$password = "";
$dbname = "";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  




$user = $_POST['user'];  
$score = $_POST['score'];  
          
   
			
				$sql = "INSERT INTO "DATABASE NAME NEEDED" (id, user, level, score, hand)
VALUES ('0', '$user', 'Level 2', '$score', 'Right')";
			
			
			
if ($con->query($sql) === TRUE) {	
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your Score has been saved!');
    window.location.href=' "DOMAIN NEEDED" /index.php';
    </script>");  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}     
       


    ?>  




