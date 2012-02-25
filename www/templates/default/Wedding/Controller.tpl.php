<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/fixed.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" ></meta>
    <link type="text/css" href="<?php echo Wedding_Controller::$url?>www/css/boilerplate.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo Wedding_Controller::$url?>www/css/form.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo Wedding_Controller::$url?>www/css/main.css" rel="stylesheet" />
    <title>Wedding</title>
</head>
<body>
    <h1><a href="<?php echo Wedding_Controller::$url?>" title="go to the home page">Michael and Amy's Wedding</a></h1>
    
    <div id='maincontent'>
    <div id='heartcontainer'><div id='heart'></div></div>
        <?php 
        echo $savvy->render($context->actionable);
        ?>
    </div>
    <div id='footer'>
      Olive you olive the thyme
    </div>
</body>
</html>