<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <title>Darren Fisher HW 1 Ecommerce</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
        <div id="divOne"> 
            Hello, world!
            </br>
            Welcoem to Page one!
        </div>
        
        <!-- Post echo php -->
        <div>       
            Hi <?php echo $_POST["name"]; ?><br>
            Your school is: <?php echo $_POST["School"]; ?>
            Your favorite class is: <?php echo $_POST["FavoriteClass"]; ?>            
        </div>

        
    </body>
</html>








