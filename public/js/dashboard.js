const selectMercadoria = document.getElementById('selecionarMercadoria');
const valorInput = document.getElementById('InputValor');
const quantidadeLabel = document.getElementById('labelqtdeprodestoque');
const vendaTable = document.getElementById('vendaTable');
const qtdeprodInput = document.getElementById('Inputquantidade');
const totalVenda = document.getElementById('valortotal');
const tbodyVenda = documente.getElementById('listavenda');

$('#modalCriarVenda').on('hidden.bs.modal', function (){
    tbodyVenda.innerHTML = ''
})

$(document).ready(function() {
    $('#mercadoriaTable').DataTable();
    $('#clienteTable').DataTable();
});

document.addEventListener("DOMContentLoaded", function (){
    selectMercadoria.addEventListener("change", function() {
        const mercadoriaId = selectMercadoria.value;
        fetch(`get-mercadoria-data?mercadoriaId=${mercadoriaId}`)
            .then(response => response.json())
            .then(data=> {
                valorInput.value = data.valor;
                quantidadeLabel.innerHTML = `Quantidade do produto em estoque: ${data.saldo}`
            })
            .catch(error => console.error("Erro na requisição AJAX", error));
    });
});

function formatarTelefone(input) {
    // Remove todos os caracteres não numéricos
    var telefone = input.value.replace(/\D/g, '');

    // Verifica o tamanho do número de telefone
    var tamanho = telefone.length;

    // Aplica a máscara de acordo com o tamanho
    if (tamanho === 11) {
        telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    } else if (tamanho === 10) {
        telefone = telefone.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
    } else if (tamanho === 9) {
        telefone = telefone.replace(/^(\d{5})(\d{4})$/, '$1-$2');
    } else if (tamanho === 8) {
        telefone = telefone.replace(/^(\d{4})(\d{4})$/, '$1-$2');
    }

    // Atualiza o valor do input
    input.value = telefone;
}

function getTotalProduto(valorProduto, quantidadeProduto){
    let totalProduto = valorProduto * quantidadeProduto
    return totalProduto;
}

function getTotalVenda(totalVenda, valorProduto){
    let total = totalVenda + valorProduto
    return total
}

function addMercadoriaTabela() {
    const newRow = vendaTable.insertRow();
    let totalProd = getTotalProduto(valorInput.value, qtdeprodInput.value);

    if(selectMercadoria.value == '' || selectMercadoria.value == 0){
        alert('selecione um produto para ser adiciona a tabela')
    }
    else{
        newRow.innerHTML = `<td>${selectMercadoria.options[selectMercadoria.selectedIndex].text}</td>
                             <td>${qtdeprodInput.value}</td>
                             <td>${totalProd}</td>`

        selectMercadoria.value = ''
        valorInput.value = ''
        qtdeprodInput.value = ''
        quantidadeLabel.innerHTML = 'Quantidade do produto em estoque: 0'
        totalVenda.innerHTML = getTotalVenda(parseFloat(totalVenda.innerHTML) ,totalProd)

    }
}