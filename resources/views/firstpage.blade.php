<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <style>
        /* body {
        background-image: url("uitmpic.jpeg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        }*/

        body {
            background-image: url("uitmpic.jpeg");


            /* Center and scale the image nicely */
            
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100vh
            }

            .centered {
            text-align: center;
            position: absolute;
            background-color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: purple;
            border-radius: 25px;
            border: 5px ;
            padding: 15px;
            width: 500px;
            height: 300px;

            }

            .jauhskit{
                margin:10px;
                padding: 20px;
            }

        </style>
    </head>
    <body>
    <div class="centered">
        <h3><b>Welcome to UiTM Off-Campus Placement Portal</b></h3>
           
    <div class="d-grid gap-2">
        <a class="btn btn-primary jauhskit" href="/login2" role="button">UITM STUDENT</a>
        <a class="btn btn-primary jauhskit" href="/login" role="button">OWNER</a>
  
    </div>
    </div>

    </body>
</html>
