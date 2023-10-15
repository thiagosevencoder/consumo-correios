## CRAWLER DE BUSCA DE DADOS DE ENDEREÇO NA BASE DOS CORREIOS

Uma maneira simples de fazer busca de dados de endereços através do consumo nos correios

## INSTALAÇÃO

Para instalar essa dependencia, basta executar o comando abaixo :

``` SHEL
composer require sevencoder/consumo-correios
```

### UTILIZAÇÃO

```php

<?php

//isso aqui neão será necesário se os arquivos aonde voce chama já roda com o autolooad do composer
require __DIR__ . '/../vendor/autoload.php';

//importanto dependencia do composer
use SevenCoder\ConsumoCorreios\ConsumoCorreios;

//busca de cep atráves do endereco
$buscaCepPorEndereco = ConsumoCorreios::buscarCepByEndereco('Avenida Dom Pedro');

//de endereco através de cep
$buscaEnderecoByCEP = ConsumoCorreios::buscarEnderecoByCep('58064560');

```

### REQUISITOS
-PHP 7.0
- LIB guzzlehttp/guzzle >= 7.0