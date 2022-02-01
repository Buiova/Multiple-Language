<?php
 include"config.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Lesson</title>
    <style>
        .hover {
            
            transition: .3s !important;
        }
        
        .hover:hover {
            transition: .3s !important;
            color: wheat !important; 
        }
        .footer{
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
    </style>
</head>

<body>

    
        <nav class="navbar bg-dark navbar-dark navbar-expand-sm">
            <div class="container">
                <a href=#" class="navbar-brand"><?php echo $lang['welcome']?></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $lang['home']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $lang['about']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $lang['pricing']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $lang['contact']?></a>
                    </li>
                </ul>
            </div>
        </nav>
    

        <p class="display-3 text-center mt-5"><?php echo $lang['heading']?></h1>
        <p class="fs-5 text-center"><?php echo $lang['description']?></p>
    <div class="footer bg-dark text-white text-center">
          <a style="text-decoration: none; color: white;" href="index.php?lang=en"><?php echo $lang['english']?></a> | <a style="text-decoration: none; color: white;" href="index.php?lang=tr"><?php echo $lang['turkish']?></a>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>