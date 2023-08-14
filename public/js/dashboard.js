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