<?php
// Simula una base de datos o alguna fuente de datos
$customers = array(
    "ALFKI" => array(
        "CompanyName" => "Alfreds Futterkiste",
        "ContactName" => "Maria Anders",
        "City" => "Berlin",
        "Country" => "Germany"
    ),
    "NORTS" => array(
        "CompanyName" => "North/South",
        "ContactName" => "Simon Crowther",
        "City" => "London",
        "Country" => "UK"
    ),
    "WOLZA" => array(
        "CompanyName" => "Wolski Zajazd",
        "ContactName" => "Zbyszek Piestrzeniewicz",
        "City" => "Warsaw",
        "Country" => "Poland"
    )
);

// Obtén el parámetro q de la URL
$q = $_REQUEST["q"];

// Si el cliente no ha seleccionado un cliente específico
if (empty($q)) {
    echo "No customer selected";
} else {
    // Verifica si el cliente seleccionado existe en la lista
    if (array_key_exists($q, $customers)) {
        // Si existe, devuelve la información del cliente
        echo "<table>";
        echo "<tr><th>Company Name</th><td>" . $customers[$q]["CompanyName"] . "</td></tr>";
        echo "<tr><th>Contact Name</th><td>" . $customers[$q]["ContactName"] . "</td></tr>";
        echo "<tr><th>City</th><td>" . $customers[$q]["City"] . "</td></tr>";
        echo "<tr><th>Country</th><td>" . $customers[$q]["Country"] . "</td></tr>";
        echo "</table>";
    } else {
        // Si no existe, muestra un mensaje de error
        echo "Customer not found";
    }
}
?>