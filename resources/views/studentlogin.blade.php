

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
            
            position: absolute;
            background-color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: gray;
            border-radius: 25px;
            border: 5px ;
            padding: 15px;
            width: 500px;
            height: 250px;

            }

            .jauhskit{
                margin:10px;
                padding: 20px;
            }

        </style>
    </head>
    <body>
    <div class="centered">
           
        <form method='post' action="sdlogin1">
            @csrf
  <div class="mb-3">
    <label for="email" class="form-label">STUDENT EMAIL</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">log In</button>
</form>
    </div>

    </body>
</html>
