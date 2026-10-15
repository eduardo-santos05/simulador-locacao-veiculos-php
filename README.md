# Simulação de Locação de Veículos

Aplicação web desenvolvida em PHP para simular a locação de carros e motos. O projeto demonstra conceitos de Programação Orientada a Objetos (POO), como abstração, herança, encapsulamento e polimorfismo, apresentando os valores das locações em uma tabela HTML estilizada com Bootstrap.

## Funcionalidades

- Cadastro de exemplos de carros e motos diretamente no código.
- Exibição do tipo, modelo, placa, diária, quantidade de dias e características do veículo.
- Cálculo do valor-base e do valor final por veículo.
- Cálculo dos totais da locação com e sem os ajustes específicos de cada tipo.
- Aplicação de regras de preço:
  - **Carros:** acréscimo de 8% para locações superiores a 5 dias.
  - **Motos:** desconto de 5% para locações superiores a 7 dias.

## Tecnologias

- PHP 8.3 ou superior.
- HTML5.
- Bootstrap 5.3.2 via CDN.

## Estrutura do projeto

| Arquivo | Responsabilidade |
| --- | --- |
| `index.php` | Cria os exemplos, monta a locação e apresenta os resultados na página. |
| `Veiculo.php` | Classe abstrata com os dados e comportamentos comuns aos veículos. |
| `Carro.php` | Implementa o tipo carro, suas características e regra de preço. |
| `Moto.php` | Implementa o tipo moto, suas características e regra de preço. |
| `Locacao.php` | Mantém os veículos locados e calcula os totais. |

## Como executar

É necessário ter o PHP 8.3 ou superior instalado. O Bootstrap é carregado por CDN, portanto o navegador precisa de acesso à internet para aplicar os estilos.

1. Abra um terminal na pasta raiz do projeto.
2. Confira a versão do PHP:

   ```bash
   php -v
   ```

3. Inicie o servidor de desenvolvimento:

   ```bash
   php -S localhost:8000
   ```

4. Acesse [http://localhost:8000](http://localhost:8000) no navegador.

## Observações

- Os veículos e os dias de locação são definidos diretamente no código, sem persistência em banco de dados.
- O projeto tem finalidade didática, demonstrando conceitos de Programação Orientada a Objetos (POO) e regras de negócio relacionadas à locação de veículos.