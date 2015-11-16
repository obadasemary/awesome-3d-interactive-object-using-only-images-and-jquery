<?php
/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/12/2015
 * Time: 11:01 PM
 */
?>
<!DOCTYPE html>
<html lang="en" class="demo1 no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="css/default.css" />

    <!-- Edit Below -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery.interactive_3d.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elusive-webfont.css" />
</head>
<body class="demo1">

<div class="main">
    <div class="page_container">
        <div id="3d" class="interactive_3d">
            <img src="photo/frame_1.png">
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready( function() {
            $("#3d").interactive_3d({
                frames: 8,
                entrance: false
            });
        });
    </script>

</body>
</html>

