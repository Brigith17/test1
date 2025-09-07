<!DOCTYPE html>
<html>
<head><title>Productos</title></head>
<body>
<h1>Lista de Productos</h1> 
<ul>
<?php foreach($products as $p): ?>
 <li><?= $p['nombre']?> - $<?= $p['pvp']?></li>
 <?php endforeach; ?>
</ul>
</body>
</html>