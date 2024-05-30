<?php
// Susunan file: oopmvc/index.php

// Memanggil model
require_once "model/model_anggota.php";
$anggota = getAnggota();

require_once "view/anggota/list.php";

?>