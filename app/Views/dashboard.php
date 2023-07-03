<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .btn-mercadoria {
            background-color: #007bff;
            color: #fff;
        }

        .btn-cliente {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-venda {
            background-color: #fff;
            color: #000;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary btn-block btn-mercadoria">
                <i class="fas fa-box"></i> Mercadoria
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-secondary btn-block btn-cliente">
                <i class="fas fa-users"></i> Cliente
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-light btn-block btn-venda">
                <i class="fas fa-money-bill"></i> Venda
            </button>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
