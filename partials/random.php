<?php

    
                $query = 'SELECT name, detail, img FROM dog ORDER BY RAND() DESC LIMIT 1';
 
                $con = mysqli_connect('localhost', 'root', '', 'thepet');
 
                $sql = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($sql)) {
                            echo '<div class="product-list">';
                            echo '<ul class="row list-unstyled">';
                            echo '<li class="p-4">';
                            echo '<div class="list-item">';
                            $pic = '<img class="img-fluid" src="img/' . $row['img'] . '">';
                            echo "$pic";
                            echo "<h5> <b> {$row['name']} </b></h5>";
                            echo "<p>{$row['detail']}</p>";
                            echo "</div>";
                            echo "</li>";               
                } 
    
                mysqli_close($con);
?>   
<?php

    
$query = 'SELECT name, detail, img FROM cat ORDER BY RAND() DESC LIMIT 1';

$con = mysqli_connect('localhost', 'root', '', 'thepet');

$sql = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($sql)) {
        echo '<li class="p-4">';
        echo '<div class="list-item">';
        $pic = '<img class="img-fluid" src="img/' . $row['img'] . '">';
        echo "$pic";
        echo "<h5> <b> {$row['name']} </b></h5>";
        echo "<p>{$row['detail']}</p>";
        echo "</div>";
        echo "</li>";
        echo "</ul>";
        echo "</div>";              
} 

mysqli_close($con);



?>   