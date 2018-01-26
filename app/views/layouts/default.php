<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
         <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
        <title><?php echo $title; ?></title>
    </head>
    <body class="body">
        
        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="http://criptodog.ru">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="http://criptodog.ru/account/register">Regitration</a></li>
                    
                </ul>
                <h3 class="text-muted">Criptodog</h3>
            </div>
        </div>
        <div>
        <?php echo $content; ?>
        </div>
    </body>
</html>
