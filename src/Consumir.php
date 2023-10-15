<?php

namespace SevenCoder\ConsumoCorreios;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

final class Consumir
{
    const URL_CARREGA_DADOS = 'https://buscacepinter.correios.com.br/app/endereco/carrega-cep-endereco.php';
    const URL_ORIGIN = 'https://buscacepinter.correios.com.br';
    const URL_REFERER = 'https://buscacepinter.correios.com.br/app/endereco/index.php';
    const PAGINA = '/app/endereco/index.php';

    public static function consumir(string $textoBusca)
    {
        $cliente = new Client();

        $response = $cliente->post(self::URL_CARREGA_DADOS,[
            RequestOptions::HEADERS => [
                'Origin' => self::URL_ORIGIN,
                'Referer' => self::URL_REFERER
            ],
            RequestOptions::FORM_PARAMS => [
                'pagina' => self::PAGINA,
                'endereco' => $textoBusca,
                'tipoCEP' => "ALL"
            ]
        ]);

        $conteudo = json_decode($response->getBody()->getContents(), true);

        if (!$conteudo['dados']) {
            return null;
        }

        return $conteudo;
    }
}