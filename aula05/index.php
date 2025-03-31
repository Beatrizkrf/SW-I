<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">


</head>
<body>
    <style>
        body {  background-color:rgb(108, 157, 206);  }
    </style>

    <div class="container login" style="width: 400px; margin: 100px auto; padding: 30px; background: #ffffff; border-radius: 10px;">
        <form action="processa.php" method="POST">
            <h4 style="text-alingtext-align: center; color:rgb(76, 129, 243) ; ">MINI PROJETO - PHP: </h4>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline bloco mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" />
                <label class="form-label" for="form2Example1">Email:</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline bloco mb-4">
                <input type="password" id="form2Example2" class="form-control" name="senha"/>
                <label class="form-label" for="form2Example2">Senha:</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31">Lembre - me!</label>
                </div>
                </div>

               <!--  <div class="col">
                 Simple link 
                <a href="#!">Forgot password?</a>
                </div> -->
            </div>

            <!-- Submit button -->
            <input type="submit" value="Entrar" class="btn btn-primary btn-block mb-4 checar">
            <!-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button> -->

            <!-- <!-- Register buttons 
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
                </button>
            </div> -->
        </form>
    </div>
</body>
</html>