<?php
if(isset($_POST['imie_a_z']))
    {
        $asc_query = "SELECT * FROM users ORDER BY imie ASC";
        $result = executeQuery($asc_query);
    }
elseif (isset ($_POST['imie_z_a'])) 
    {
          $desc_query = "SELECT * FROM users ORDER BY imie DESC";
          $result = executeQuery($desc_query);
    }
elseif(isset ($_POST['nazwisko_a_z'])) 
    {
        $asc_query = "SELECT * FROM users ORDER BY nazwisko ASC";
        $result = executeQuery($asc_query);
    }
elseif (isset ($_POST['nazwisko_z_a'])) 
    {
          $desc_query = "SELECT * FROM users ORDER BY nazwisko DESC";
          $result = executeQuery($desc_query);
    }
elseif(isset ($_POST['data_a_z'])) 
    {
        $asc_query = "SELECT * FROM users ORDER BY data_urodzenia ASC";
        $result = executeQuery($asc_query);
    }
elseif (isset ($_POST['data_z_a'])) 
    {
        $desc_query = "SELECT * FROM users ORDER BY data_urodzenia DESC";
        $result = executeQuery($desc_query);
    }
elseif(isset ($_POST['id_0_20'])) 
    {
        $asc_query = "SELECT * FROM users ORDER BY id ASC";
        $result = executeQuery($asc_query);
    }
elseif (isset ($_POST['id_20_0'])) 
    {
        $desc_query = "SELECT * FROM users ORDER BY id DESC";
        $result = executeQuery($desc_query);
    }
else {
        $default_query = "SELECT * FROM users";
        $result = executeQuery($default_query);
}
function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>
<!DOCTYPE html>
<html>
    <head>
       <style>
           *{
               transition: .6s;
               font-size: 20px;
           }
            table,tr,th,td
            {
                border: 1px solid black;
                background: #303030;
            }
            body{
                display:flex;
                justify-content:center;
            }
            th{
                background: #adadad;
                text-transform:uppercase;
            }
            tr,td{
                background: #adadad;
            }
            input{
                outline: none;
                border: none;
                margin: 1px;
                background:transparent;
                border-bottom: 2px solid #303030;
            }
            input:hover{
                background: #8b8b8b;
                color: whitesmoke;
                border-bottom: 2px solid whitesmoke;
                cursor:pointer;
            }
        </style>
    </head>
    <body>     
        <form action="<?php $_SERVER ["PHP_SELF"]?>" method="post">
            <table>
                <tr>
                    <th><input type="submit" name="id_0_20" value="0-20"><input type="submit" name="id_20_0" value="20-0"><br>Id</th>
                    <th><input type="submit" name="imie_a_z" value="Rosnąco"><input type="submit" name="imie_z_a" value="Malejąco"><br>Imię</th>
                    <th><input type="submit" name="nazwisko_a_z" value="Rosnąco"><input type="submit" name="nazwisko_z_a" value="Malejąco"><br>Nazwisko</th>
                    <th><input type="submit" name="data_a_z" value="Rosnąco"><input type="submit" name="data_z_a" value="Malejąco"><br>Data urodzenia</th>
                    <th>E-mail</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>   
                </tr>
                <?php endwhile;?>
            </table>
        </form>    
    </body>
</html>
