<?php

namespace SevenCoder\ConsumoCorreios;

class ConsumoCorreios
{
    public static function buscarEnderecoByCep(string $cep)
    {
        $conteudo = Consumir::consumir($cep);

        $endereco = $conteudo['dados'][0];

        return $endereco;
    }

    public static function buscarCepByEndereco(string $endereco)
    {
        $conteudo = Consumir::consumir($endereco);

        $enderecos = !empty($conteudo['dados']) ? $conteudo['dados'] : null;

        return $enderecos;
    }
}