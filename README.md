Hakkında
====================

Kategori ve alt kategorileri hiyerarişk bir biçimde göstermek için bir sınıf hazırladım.

Örnek Kullanımı index.php içerisinde var kontrol edebilirsiniz.

Kullanımı
====================
```
<div class="tree-panel">
	<ul id="home-tree" class="tree">
		<?php
			$array = array();
			$array["ktg_id"] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
			$array["ktg_adi"] = array("Ana Kategori", "Elektronik", "Ev Aletleri", "Televizyon", "Bilgisayar", "Beyaz Eşya", "Buzdolabı", "Çamaşır Makinası", "Bulaşık Makinası");
			$array["ktg_ust"] = array(0, 1, 1, 2, 2, 3, 6, 6, 6);

			$secilmisler = array(3, 7, 9);
			echo KategoriAgaci::tree($array, null, $secilmisler);
      
      //KategoriAgaci::tree($dizi, $ust, $secilmisler, $inputName);
		?>
	</ul>
</div>
```
