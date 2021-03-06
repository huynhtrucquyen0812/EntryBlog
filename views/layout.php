<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Entry Blog</title>
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css/styles.css">
    <script type="text/javascript" src="./styles/js/jquery.js"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./styles/js/bootstrap.js"></script>

</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class="active"><a href="index.php"><h2>Entry Blog</h2></a></li>
        </ul>
      </div>
    </div>
    <div class='row-fluid'>
        <div class='span9 main'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        <div class='span3 sidebar'>
            <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
        </div>
        </div>
  </div>
</body>
</html>