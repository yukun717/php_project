<html>
    <head>
        <title>Table with database</title>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>href</th>
                <th>position</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "123456", "chap05db");
            if($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
            }
            $sql = "select id, name, href, position from wm_menus";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["href"] ."</td><td>". $row["position"] ."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn ->close();
            ?>
        </table>
    </body>
</html>