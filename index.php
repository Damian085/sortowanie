<?php
        $dbServer = 'localhost';
        $dbUser = 'root';
        $dbPassword = '';
        $dbName = 'test';
        
        
        $mysqli = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
        $mysqli->set_charset("utf8");
	
		$statement = "SELECT * FROM `users` WHERE 1 ORDER BY `users`.`imie` ASC";
        $result = mysqli_query($mysqli,$statement);
        $resultConfirm = mysqli_num_rows($result);
        echo "<table>";
        if ($resultConfirm > 0)
            
            while($row = mysqli_fetch_assoc($result) )
            {
                
                echo "<tr><td>" . $row['imie'] . "</td><td>";
                echo $row['nazwisko'] . "</td><td>";
                echo $row['data_urodzenia'] . "</td><td>";
                echo $row['email'] . "</td></tr>";
            }
            echo "</table>";
			
            echo "
            <style>
                table{
                    
                }
                td{
                    border: 2px dotted #47a3ac;
                }
            </style>
				";	
                        
				?>