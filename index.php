<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>lalit</title>
</head>
<body id="bgr">
    <div class="col-12 mainlabel mb-1" id="mainlabel">
        
    </div>
    <div class="container main">
        <div class="row">
            <div class="col-lg-6 mainleft">
                <form action="#" id="radioform">
                    <label style="color:#fb7729">Default ID</label><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="id" id="yourid" value="randomid" checked onchange="alertradio();">
                            </div>
                        </div>
                        <input type="text" class="form-control" maxlength="9" id="youridinput">
                    </div>

                    <label class="mt-2" style="color:#fb7729">or Enter Your Own ID</label><br>

                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="id" id="ownid" value="customid" onchange="alertradio();">
                            </div>
                        </div>
                        <input type="text" class="form-control" maxlength="9" id="ownidinput" name="ownidinput" placeholder="Enter Your Own New Unique ID...">
                        <a class="btn btn-info ownbutton text-white" id="ownbutton">Submit</a>
                    </div>

                    <label class="pl-3 py-0" id="indicate"> </label>
               </form>
            </div>
            <div class="col-lg-6">
                <form action="download.php" method="POST">
                    <label for="friendid" style="color:#fb7729">Friend's ID</label><br>
                    <input class="form-control py-0 friendid" type="text" id="friendid" name="friendid" placeholder="Enter Your Friend's ID For Download Files...">
                    <div class="getfiles">
                        <label class="friendlabel" id="friendlabel"></label>
                        <input class="btn btn-info my-2" type="submit" value="Get Files" class="getfilesbutton">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form name="form" action="#" enctype="multipart/form-data" method="POST">
        <div class="container">
            <div class="row m-1">
                    <label style="color:#fb7729">Upload Files:</label>
                    <div class="uploadplace" id="uploadplace">
                        <div class="upload-message">
                            <img src="img/upload-image.svg" alt="upload image" draggable="false">
                            <h2 class="drag-files" id="drag-files" draggable="false">Drag files here</h2>
                            <h2 class="drop-files" id="drop-files" draggable="false">Drop to upload</h2>
                            <h2 class="drag-additional-files" id="drag-additional-files" draggable="false">Drag additional files here</h2>
                        </div>
                        <div class="uploadfileupper"></div>
                        <div class="uploadfile" >
                            <p style="display:inline;" id="anchor-para">
                            <input type="file" name="file[]" id="file" class="file-upload" aria-label="choose your files" multiple>
                            Or
                            <a class="file-upload-anchor" id="anchor" href="#" draggable="false">choose your files</a>
                            </p>
                        </div>
                        <div id="myprogress" class="myprogress">
                            <div id="mybar" class="mybar"></div>
                        </div>
                    </div>
            </div>
        </div>
    </form>
    <br>
    <script src="js/index.js"></script>
</body>
</html>