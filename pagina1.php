<?php
session_start();

//criacao de uma sessao 
$_SESSION['nome'] = "Joao Vivtor";

header("location:pagina2.php");

