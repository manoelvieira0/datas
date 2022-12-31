<?php

echo "<p>Trasnformar data atual em timestamp: " . time() . "</p>";

echo "<p>Data timestamp em data atual: " . date("d/m/y", time()) . "</p>";

echo "<p>Data atual em timestamp: " . strtotime("2022-12-31") . "</p>";

$data = "2021-12-31";
$nova_data = strtotime($data) + (86400 * 100);
echo "<p>Somar 100 dias em uma data: " . date("d/m/y", $nova_data) . "</p>";

$data = "2021-12-31";
$nova_data = strtotime($data) - (86400 * 10);
echo "<p>Subtrair 10 dias em uma data: " . date("d/m/y", $nova_data) . "</p>";

echo "<p>Convertendo o timestamp em banco de dados: " . date("y-m-d H:i:s", time()) . "</p>";

echo "<p>Descobrir dia da semana de uma data: " . date("D", $nova_data) . "</p>";