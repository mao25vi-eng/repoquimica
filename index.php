<?php
// Historia de la Química en PHP

echo "<h1>Historia de la Química</h1>";

$historia = [
    "Antigüedad" => "Los filósofos griegos como Empédocles y Aristóteles propusieron que todo estaba formado por cuatro elementos: tierra, agua, aire y fuego.",
    "Edad Media" => "La alquimia buscaba transformar metales en oro y encontrar el elixir de la vida. Aunque no lograron sus objetivos, sentaron bases experimentales.",
    "Siglo XVII" => "Roberts Boyle estableció métodos experimentales y rechazó la teoría de los cuatro elementos, iniciando la química moderna.",
    "Siglo XVIII" => "Antoine Lavoisier formuló la ley de conservación de la masa y creó una lista de elementos químicos.",
    "Siglo XIX" => "Dmitri Mendeléyev organizó la tabla periódica, prediciendo la existencia de elementos aún no descubiertos.",
    "Siglo XX" => "Se desarrolló la química cuántica y la química orgánica sintética, revolucionando la industria y la medicina.",
    "Actualidad" => "La química se aplica en nanotecnología, biotecnología y materiales avanzados, impactando la vida cotidiana."
];

foreach ($historia as $epoca => $descripcion) {
    echo "<h2>$epoca</h2>";
    echo "<p>$descripcion</p>";
}
?>
