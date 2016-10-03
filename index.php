<?php
header('Content-type: text/html; charset=utf8');
require 'kategoriagaci.class.php';
?>
<!doctype html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<link href="treeStyle.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("input[name='category[]']").click(function () {
				if($(this).is(':checked')){
					$(this).parent().addClass("checked");
				}
				else{
					$(this).parent().removeClass("checked");
				}
			});
		});
	</script>
	<title>Kategori Ağacı</title>
</head>
<body>
	<div class="tree-panel">
		<ul id="home-tree" class="tree">
			<?php
			$array = array();
			$array["ktg_id"] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
			$array["ktg_adi"] = array("Ana Kategori", "Elektronik", "Ev Aletleri", "Televizyon", "Bilgisayar", "Beyaz Eşya", "Buzdolabı", "Çamaşır Makinası", "Bulaşık Makinası");
			$array["ktg_ust"] = array(0, 1, 1, 2, 2, 3, 6, 6, 6);

			$secilmisler = array(3, 7, 9);
			echo KategoriAgaci::tree($array, null, $secilmisler);
			?>
		</ul>
	</div>
</body>
</html>
