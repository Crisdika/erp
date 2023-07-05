<?php $mercadoriaReposiroty = new \App\Models\MercadoriaRepository();?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
            <button class="btn btn-primary btn-block btn-mercadoria" data-toggle="modal" data-target="#modalMercadoria">
                <i class="fas fa-box"></i> Mercadoria
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-secondary btn-block btn-cliente" data-toggle="modal" data-target="#modalCliente">
                <i class="fas fa-users"></i> Cliente
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-light btn-block btn-venda" data-toggle="modal" data-target="#modalVenda">
                <i class="fas fa-money-bill"></i> Venda
            </button>
        </div>
    </div>
</div>

<!-- Modal Mercadoria -->
<div class="modal fade" id="modalMercadoria" tabindex="-1" role="dialog" aria-labelledby="modalMercadoriaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMercadoriaLabel">Opções da Mercadoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary col-5" data-toggle="modal" data-target="#modalCadastrarMercadoria">Cadastrar Mercadoria</button>
                    <button class="btn btn-secondary col-5" data-toggle="modal" data-target="#modalConsultarMercadoria">Consultar Mercadoria</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cadastrar Mercadoria -->
<div class="modal fade" id="modalCadastrarMercadoria" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarMercadoriaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastrarMercadoriaLabel">Cadastrar Nova Mercadoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/cadastrar/mercadoria">
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da mercadoria" required>
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo:</label>
                        <input type="number" class="form-control" id="saldo" name="saldo" placeholder="Digite o saldo da mercadoria">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" id="valor" name = "valor" placeholder="Digite o valor da mercadoria">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Consultar Mercadoria -->
<div class="modal fade" id="modalConsultarMercadoria" tabindex="-1" role="dialog" aria-labelledby="modalConsultarMercadoriaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConsultarMercadoriaLabel">Consultar Mercadoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="mercadoriaTable" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Saldo</th>
                        <th>Valor</th>
                    </tr>
                    </thead>

                    <?php foreach ($mercadoriaReposiroty->listarMercadoria() as $mercadoria): ?>
                        <tbody>
                            <tr>
                                <td><?= $mercadoriaReposiroty['desc'] ?></td>
                                <td><?= $mercadoriaReposiroty['saldo']?> </td>
                                <td><?= $mercadoriaReposiroty['valor']?> </td>
                            </tr>

                        <!-- Adicione aqui os dados da tabela conforme necessário -->
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="modalClienteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalClienteLabel">Opções do Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary col-5">Cadastrar Cliente</button>
                    <button class="btn btn-secondary col-5">Consultar Cliente</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Venda -->
<div class="modal fade" id="modalVenda" tabindex="-1" role="dialog" aria-labelledby="modalVendaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVendaLabel">Opções de Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary col-5">Realizar Venda</button>
                    <button class="btn btn-secondary col-5">Consultar Venda</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mercadoriaTable').DataTable();
    });
</script>
</body>
</html>
