
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="part1.css">
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>PHP Forms</title>
    </head>
    <body>
        <?php
        $fontfamily = $_POST['fontfamily'];
        $textcolor = $_POST['textcolor'];
        $textarea = $_POST['textarea'];
        ?>
        
        <p class="<?php echo $textcolor; ?> <?php echo $fontfamily; ?>"><?php echo "$textarea"?></p>
    </body>
</html>

