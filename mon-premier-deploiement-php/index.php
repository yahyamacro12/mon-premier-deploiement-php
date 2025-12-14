<?php
echo "<h1>🎉 Félicitations !</h1>";
echo "<p>Mon application PHP est en ligne sur Render !</p>";
echo "<p>Date du serveur : " . date('Y-m-d H:i:s') . "</p>";
echo "<p>Version : 1.0.1</p>";

// Test de connexion à une base de données (optionnel)
if (getenv('DATABASE_URL')) {
    echo "<p style='color: green;'>✅ Variable DATABASE_URL détectée</p>";
} else {
    echo "<p style='color: orange;'>⚠️ Pas de base de données configurée</p>";
}
?>
