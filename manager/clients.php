<?php
// use phpGrid\C_DataGrid;

include_once("../phpGrid/conf.php");
include_once('../inc/head.php');
?>

<h1>Mi creación de gestor de proyectos</h1>

<?php
$_GET['currentPage'] = 'clients';
include_once('../inc/menu.php');
// para mostrar elementos de la BBDD
?>

<h3>Clientes</h3>

<?php
$dgClient = new C_DataGrid("SELECT id, Name, Website, Industry, Phone FROM clients", "id", "clients");
$dgClient->set_col_hidden('id');
$dgClient->set_col_link('Website');
$dgClient->set_col_dynalink('Name', 'client-details.php', 'id');
$dgClient->enable_edit();
$dgClient -> display();
?>

<?php
include_once('../inc/footer.php');
?>