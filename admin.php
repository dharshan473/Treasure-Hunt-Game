<html>
    <head>
        <title>Admin</title>
        <link rel="icon" type="image/x-icon" href="treasure-chest.png">
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        
            <table id="data">
                <tr>
                    <th>email</th>
                    <th>score</th>
                </tr>

                <?php   
                $conn = mysqli_connect("localhost","root","","login");
                $sql = "select email,score from users";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>" .$row["email"] . "</td><td>". $row["score"]. "</td></tr>";
                    }
                }
                else{
                    echo "No results";
                }
                ?>

                
            </table>
        
        
    </body>
</html>