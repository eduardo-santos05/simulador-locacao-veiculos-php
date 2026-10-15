<?php
    require_once 'Veiculo.php';
    require_once 'Carro.php';
    require_once 'Moto.php';
    require_once 'Locacao.php';

    $carro1 = new Carro("Onix", "ABC-1234", 120.0, 4);
    $carro2 = new Carro("HB20", "XYZ-9876", 140.0, 4);
    $carro3 = new Carro("Civic", "QWE-4567", 200.0, 4);

    $moto1 = new Moto("Honda CG", "MOT-1111", 80.0, 160);
    $moto2 = new Moto("Yamaha Fazer", "MOT-2222", 90.0, 250);
    $moto3 = new Moto("BMW GS", "MOT-3333", 150.0, 750);

    $locacao = new Locacao();
    $locacao->adicionarVeiculo($carro1, 6);
    $locacao->adicionarVeiculo($carro2, 4);
    $locacao->adicionarVeiculo($carro3, 7);
    $locacao->adicionarVeiculo($moto1, 8);
    $locacao->adicionarVeiculo($moto2, 5);
    $locacao->adicionarVeiculo($moto3, 10);

    $itens = $locacao->getItens();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Simulação de Locação de Veículos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center my-4">Simulação de Locação de Veículos</h1>
            <table class="table table-striped table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>Diária (R$)</th>
                        <th>Dias</th>
                        <th>Info Extra</th>
                        <th>Valor Base (R$)</th>
                        <th>Valor Final (R$)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($itens as $item): 
                        $veiculo = $item['veiculo'];
                        $dias = $item['dias'];
                        $valorBase = $veiculo->getValorDiaria() * $dias;
                        $valorFinal = $veiculo->calcularValorFinal($dias);
                    ?>
                        <tr>
                            <td><?= $veiculo->getTipo() ?></td>
                            <td><?= $veiculo->getModelo() ?></td>
                            <td><?= $veiculo->getPlaca() ?></td>
                            <td><?= number_format($veiculo->getValorDiaria(), 2, ',', '.') ?></td>
                            <td><?= $dias ?></td>
                            <td><?= $veiculo->getCaracteristicas() ?></td>
                            <td><?= number_format($valorBase, 2, ',', '.') ?></td>
                            <td><?= number_format($valorFinal, 2, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="alert alert-info mt-4 p-4 rounded shadow-sm">
                <p class="mb-2">
                    <strong>Valor Total sem Desconto/Acréscimo:</strong> 
                    <span>R$ <?= number_format($locacao->calcularTotalSemAjuste(), 2, ',', '.') ?></span>
                </p>
                <p class="mb-0">
                    <strong>Valor Total com Desconto/Acréscimo:</strong> 
                    <span>R$ <?= number_format($locacao->calcularTotalComAjuste(), 2, ',', '.') ?></span>
                </p>
            </div>
        </div>
    </body>
</html>
