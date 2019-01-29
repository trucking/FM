<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset="utf-8">
        <script src="./Application/Home/View/js/test.js"></script>
        <title>this is test page</title>
    </head>
    <body>
        Hello,this is temp file</br>
        here is val</br>
        this is test1's val <?php echo ($test1); ?></br>
        this is test2's val <?php echo ($test2); ?></br>
        this is test3's val <?php echo ($test3); ?></br>
        OK!
        now this is the system value</br>
        <?php echo ($_SERVER['SCRIPT_NAME']); ?> is the system.script_name
        {/fm/}
    </body>
</html>