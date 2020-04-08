<?php
session_start();
if(empty($_POST['friendid'])){
    header("location:index.php");
}
else{
    $_SESSION['friendid']=$_POST['friendid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/download.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Download your friend's uploaded files</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 px-0 py-1 d-flex upperdiv">
                <div class="upperleft" style="color:#5dbdc3;font-size:28px;">ID:<?php echo $_SESSION['friendid'] ?></div>
                <div><a class="btn btn-info" href="index.php">Home</a></div>
            </div>
            <table class="table table-responsive">
                <thead class="thead">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Size</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody class="tbody">

                    <?php
                        $x=0;
                        $dir = "warehouse/{$_SESSION['friendid']}/";
                        if (is_dir($dir)){
                            if ($dh = opendir($dir)){
                                while ($file = readdir($dh)){
                                    if($file!='.' && $file!='..'){
                                        echo "<tr><td>".++$x."</td><td>".$file."</td><td>".round(filesize($dir."/".$file)/1024/1024,3)."MB"."</td><td><a class='anchor' href='$dir/$file'>".$file."</a></td>";
                                    }
                                }
                                closedir($dh);
                            }
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>