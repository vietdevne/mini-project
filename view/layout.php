<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build PC</title>
    <link rel="stylesheet" href="view/content/bootstrap/css/bootstrap.min.css">
    <script src="content/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">   
        <div class="col-md-12">
            <h1 class="alert alert-warning text-center">Welcome <?=$hello ?></h1>
        </div>
        <div class="col-md-9"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6 justify-content-center">
        <h4 class="text-success text-center"><?=$message?></h4>
            <?php include $viewname ?>
        </div>
    </div>
</body>
</html>