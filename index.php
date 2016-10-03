<?php
header('Content-type: text/html; charset=utf8');
require 'kategoriagaci.class.php';
?>
<!doctype html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<link href="treeStyle.css" rel="stylesheet">
	<title>Kategori Ağacı</title>
</head>
<body>
	<div class="tree-panel">
		<div class="tree-panel-heading">
			<a class="btn btn-default" href="#" id="hepsini-sec"><i class="fa fa-check-square"></i> Tümünü Seç</a>
			<a class="btn btn-default" href="#" id="hepsini-cikar"><i class="fa fa-minus-square"></i> Tümünü Çıkar</a>
		</div>
		<ul id="home-tree" class="tree">
			<?php
			$array = array();
			$array["ktg_id"][] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
			$array["ktg_adi"][] = array("Ana Kategori", "Elektronik", "Ev Aletleri", "Televizyon", "Bilgisayar", "Beyaz Eşya", "Buzdolabı", "Çamaşır Makinası", "Bulaşık Makinası");
			$array["ktg_ust"][] = array(0, 1, 1, 2, 2, 3, 4, 4, 4);
			KategoriAgaci::tree($array);
			?>
		</ul>
	</div>
</body>
</html>
