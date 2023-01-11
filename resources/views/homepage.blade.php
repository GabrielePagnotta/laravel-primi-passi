<?php 
$name= "Gabriele";
$world="Hello World";

$arraynav = [
    ["href"=>"http://127.0.0.1:8000/homepage/page1","text"=>"About"],
    ["href"=>"http://127.0.0.1:8000/homepage/page2","text"=>"Chi Sono"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('app.js') }}" defer></script>
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="container">
        <div>
            <img class="logo" src="https://laravel.com/img/logomark.min.svg" alt="laravel-logo">
            <img src="https://laravel.com/img/logotype.min.svg" alt="laravel-logo-text">
            
        </div>
        
        <div>
            <?php foreach ($arraynav as $key) {?>
                 <a href="<?php echo $key["href"] ?>"><?php echo $key["text"] ?></a>
            <?php } ?>

        </div>
    
    </header>
    <body>
        <h1 class="display">{{$world}}</h1>    
    </body>

    
    
</body>
<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        text-decoration-line: none;
    }
    .container{
       display:flex;
       justify-content:space-between;
       width: 100%;
       margin:0 auto;
       align-items:center;
       background-color:#73a7a7;
       padding:20px 100px;

    }

    .logo{
        width:30%;
        display:inline-block;
    }

    a{
        margin:20px;
        font-size:1.5rem;
        color:black;   
    }

    body{
        text-align:center;
    }
</style>
</html>