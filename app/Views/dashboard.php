<?php
    $mercadoriaReposiroty = new \App\Models\MercadoriaRepository();
    $clienteRepository = new App\Models\ClienteRepository();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .btn-venda {
            color: #000;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Olá <?= $user_name ?>!</h1>
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
<div class="modal fade" id="modalCadastrarMercadoria" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarMercadoriaLabel" aria-hidden="true" style="z-index: 9999;">
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
                        <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Digite o saldo da mercadoria">
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
                <table id="clienteTable" class="table table-striped">
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
                                <td><?= $mercadoria['desc']?></td>
                                <td><?= $mercadoria['saldo']?> </td>
                                <td><?= $mercadoria['valor']?> </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar mercadoria -->
<div class="modal fade" id="modalEditarMercadoria" tabindex="-1" role="dialog" aria-labelledby="modalEditarMercadoriaLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarMercadoriaLabel">Editar Mercadoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/editar/mercadoria">
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da mercadoria" required>
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo:</label>
                        <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Digite o saldo da mercadoria">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor da mercadoria">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
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
                    <button class="btn btn-primary col-5" data-toggle="modal" data-target="#modalCadastrarCliente">Cadastrar Cliente</button>
                    <button class="btn btn-secondary col-5" data-toggle="modal" data-target="#modalConsultarCliente">Consultar Cliente</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cadastrar Cliente -->
<div class="modal fade" id="modalCadastrarCliente" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarClienteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulário de cadastro de cliente -->
                <form method="post" action="/cadastrar/cliente">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000" onkeyup="formatarTelefone(this)">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal ConsultarCliente Mercadoria -->
<div class="modal fade" id="modalConsultarCliente" tabindex="-1" role="dialog" aria-labelledby="modalConsultarClienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConsultarClienteLabel">Consultar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <table id="clienteTable" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                    </thead>
                    <?php foreach ($clienteRepository->listarCliente() as $cliente): ?>
                        <tbody>
                        <tr>
                            <td><?= $cliente['nome'] ?> </td>
                            <td><?= $cliente['email'] ?> </td>
                            <td><?= $cliente['telefone']?> </td>
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
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
                    <button class="btn btn-primary col-5" data-toggle="modal" data-target="#modalCriarVenda">Realizar Venda</button>
                    <button class="btn btn-secondary col-5">Consultar Venda</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal criar venda -->
<div class="modal fade" id="modalCriarVenda" tabindex="-1" role="dialog" aria-labelledby="modalCriarVendaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCriarVenda">Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="">
                <div class="d-flex justify-content-between form-group">
                    <select class="form-control" name="selecionacliente" id="selecionacliente">
                        <option value="" disabled selected>Selecione seu cliente</option>
                        <?php foreach ($clienteRepository->listarCliente() as $cliente): ?>
                            <option value="<?= $cliente['id'] ?> "> <?= $cliente['nome'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Descrição da venda">
                </div>
                <div class="form-group">
                    <div class="d-flex">
                        <select id="selecionarMercadoria" class="form-control m-2">
                            <option value="" disabled selected>Selecione sua mercadoria</option>
                            <?php foreach ($mercadoriaReposiroty->listarMercadoria() as $mercadoria): ?>
                                <option value="<?= $mercadoria['id'] ?>"><?= $mercadoria['desc'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <label for="selecionarMercadoria" id="labelqtdeprodestoque" class="ml-2">Quantidade do produto em estoque: 0</label>
                    <div class="d-flex">
                        <input type="number" class="form-control m-2" name="InputValor" id="InputValor" placeholder="Valor do produto">
                        <input type="number" class="form-control m-2" id="Inputquantidade" placeholder="Quantidade">
                        <button type="button" class="btn-sm btn-primary" onclick="addMercadoriaTabela()">Adicionar</button>
                    </div>
                </div>
                <div>
                    <table id="vendaTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>decrição</th>
                                <th>quantidade</th>
                                <th>valor total</th>
                            </tr>
                        </thead>
                        <tbody id="listavenda">
                            <tr></tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group d-flex flex-row-reverse">
                    <strong><p class="text text-primary">Valor total: R$<a id="valortotal">0</a></p></strong>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Gerar venda" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="\js\dashboard.js"></script>
</html>