<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Comet demo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="prototype.js"></script>
        <script type="text/javascript" src="comet.js"></script>

    </head>
    <body>

        <div id="content">
        </div>
        <?php $username = "David"; ?>

        <form action="" method="get" onsubmit="comet.doRequest('<div class=\'username\'> <?php echo $username; ?> : </div> ' + $('word').value);$('word').value='';return false;">
            <input type="text" name="word" id="word" value="" />
            <input type="submit" name="submit" value="Send" />
        </form>


        <style type="text/css">


            .username {
                float: left;
                padding-right: 10px;
                color: blue;
            }



        </style>
    </body>
</html>