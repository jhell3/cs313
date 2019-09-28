<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INFO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assign.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>Pokemon</h1>
        <div>
        <?php
            echo "my favorite pokemon is definitly Mewtwo. he is legit.";
        ?>
        <p id="para">I would consider him one of the strongest pokemon. I think it is time that I do something dynamic though. </p>
        <button id="button" onclick="fades()">Click me</button>    
        <button id="button1" onclick="pcolor()">Click me</button>  
        <button id="button2" onclick="bgcolor()">Click me</button>  
    </div>
        
        <img src="https://ae01.alicdn.com/kf/HTB1wZx9BOOYBuNjSsD4q6zSkFXaa/Full-Square-Diamond-5D-DIY-Diamond-Painting-Mewtwo-Pokemon-Embroidery-Cross-Stitch-Rhinestone-Mosaic-Painting-Home.jpg_640x640.jpg" alt="mewtwo">
        
        <script>
            function fades(){
                $("#para").fadeToggle();
            }
           
            function pcolor(){
                $("#para").css("textColor", "yellow");
                $("#button1").fadeOut();
            }
             
            function bgcolor(){
                $("#button2").css("backgroundColor", "purple");
                $("#button2").fadeOut();
            }
        </script>
    </body>
</html>