<?php ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center">
        <div class="col-3 rounded shadow-sm bg-white">
            <div class="px-5">
                <form action="" method="get" action="/login">
                    <div class="text-center">
                        <h3 class="py-5">Login</h3>
                    </div>
                    <div class="form-group my-2">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                    </div>
                    <div class="form-group py-2 text-center">
                        <button type="submit" class="btn btn-primary px-5">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


