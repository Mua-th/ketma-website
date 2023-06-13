
    <?php
    include ('connection.php');

    $fn = $_POST['fn'] ;
    $ln = $_POST['ln'] ;
    $em = $_POST['em'] ;
    $pwd = $_POST['pwd'] ;

    phpinfo();
    $query = "insert into user values ('%s' , '%s' , '%s' , '%s' ) ;";
    echo "hello";
    $res = $conn->query(sprintf($query, $fn , $ln , $em ,$pwd));

    header('Location: index.html');

?> 

