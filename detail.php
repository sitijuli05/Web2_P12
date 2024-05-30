<?php
// file : oopmvc/detail.php
require_once "model/model_anggota.php";
$anggota = getAnggotabyId($_GET['Id']);

require "view/anggota/detail.php"

?>