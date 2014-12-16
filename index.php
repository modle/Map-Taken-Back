<?php header('Content-type: text/html; charset=utf-8');
    require_once("db_connect.php"); //loads db_connect.php file

    $sql = "SELECT id, name, own FROM dualblades ORDER BY id";

    //echo($sql);
    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli)); //query result is in the result object

    echo("<table border='1'>");
    echo("<tr><th>ID</th><th>Name</th><th>Own?</th><th>Update</th></tr>");

    while($row=mysqli_fetch_array($result)){
        echo("<tr>"); //new table row
        echo "<td>" . $row['id'] . "</td>" //table data tag
            ."<td>" . $row['name'] . "</td>"
            ."<td>" . $row['own'] . "</td>"
            ."<td><a href='update.php?id=" . $row['id'] ."'>Update</a></td></tr>"; //query string
        
    }
    echo("</table>");
?>
