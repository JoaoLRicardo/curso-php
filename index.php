<?php 


function limparCPF($value)
{
    // Remove tudo que não for número
    $cpf = preg_replace('/[^0-9]/', '', $value);

    return intval($cpf);
}

var_dump(limparCPF('491.0  /  87.418-67    @*'));

function validarCPF($value)   
{
    $cpf = strval(limparCPF($value));

    // Verifica se o CPF possui 11 dígitos
    if (strlen($cpf) !== 11) {
        return 'O CPF deve ter 11 dígitos.';
    }

    // Verifica se todos os dígitos do CPF são iguais
    if (preg_match('/^(\d)\1*$/', $cpf)) {
        return 'CPF inválido (todos os dígitos iguais).';
    }

    // Calcula o primeiro dígito verificador
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += intval($cpf[$i]) * (10 - $i);
    }
    $remainder = $sum % 11;
    $digit1 = ($remainder < 2) ? 0 : 11 - $remainder;

    // Verifica o primeiro dígito verificador
    if ($cpf[9] != $digit1) {
        return 'CPF inválido (primeiro dígito verificador incorreto).';
    }

    // Calcula o segundo dígito verificador
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += intval($cpf[$i]) * (11 - $i);
    }
    $remainder = $sum % 11;
    $digit2 = ($remainder < 2) ? 0 : 11 - $remainder;

    // Verifica o segundo dígito verificador
    if ($cpf[10] != $digit2) {
        return 'CPF inválido (segundo dígito verificador incorreto).';
    }

    // Se chegou até aqui, o CPF é válido
    return 'CPF válido!';
}
var_dump(validarCPF('491.0  /  87.418-22    @*'));

?>