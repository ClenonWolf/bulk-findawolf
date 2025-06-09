<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Bulk FindAWolf</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div class="topnav">
        <a href="https://findawolf.com/post/list">FindAWolf</a>
        <a href="https://clenonwolf.com">ClenonWolf</a>
    </div>
    <div class="content">
        <h1>A viewer for all the wolf images I've collected :3</h1>
        <p>Please excuse any long loading times. For now thumbnails are generated on the fly if they don't already exist so the site might seem unresponsive.</p>
        <p>Select one of the following folders:</p>  
            <?php
            $basedir = "media";
            $d = dir($basedir);
            echo "<ul>";
            while (false !== ($entry = $d->read())) {
                if (($entry != '.') && ($entry != '..'))
                    echo "<li class='dirselect'><a href='view.php?dir={$basedir}/{$entry}'>{$entry}</a></li>";
            }
            echo "</ul>";
            $d->close();
            ?>
    </div>
    <div class="footer">
        <p>Contact: <a href="mailto:contact@clenonwolf.com">contact@clenonwolf.com</a></p>
    </div>
</body>