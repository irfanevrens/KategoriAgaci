<?php

/**
 * Class KategoriAgaci
 * @author Mahmut İŞÇİ
 * @blog http://mahmutisci.com
 * @mail mahmutisci@outlook.com
 * @date 03.10.2016
 */
class KategoriAgaci{
    /**
     * @param $array
     * @param string $inputName
     * @param int $ust_ktg
     * @param array $selected
     * @return string
     */
    static function tree($array, $inputName = "category", $ust_ktg = 0, $selected = array()){
        $data = "";
        $data .= "<ul class='tree'>";
        foreach($array["ktg_id"] as $index => $item){
            if($array["ktg_ust"][$index] == $ust_ktg){
                if(count($selected) != 0){
                    if(in_array($item, $selected)){
                        $data .= "<li class='tree-folder'>";
                        $data .= "<span class='tree-folder-name'>";
                        $data .= "<input checked type='checkbox' name='".$inputName."[]' value='".$array["ktg_id"][$index]."'>";
                        $data .= "<i class='fa fa-folder-open'></i> ";
                        $data .= "<label class='tree-toggle'>".$array['ktg_adi'][$index]."</label>";
                        $data .= "</span>";
                        $data .= self::tree($array, $array["ktg_id"][$index], $selected);
                        $data .= "</li>";
                    }
                    else{
                        $data .= "<li class='tree-folder'>";
                        $data .= "<span class='tree-folder-name'>";
                        $data .= "<input type='checkbox' name='".$inputName."[]' value='".$array["ktg_id"][$index]."'>";
                        $data .= "<i class='fa fa-folder-open'></i> ";
                        $data .= "<label class='tree-toggle'>".$array['ktg_adi'][$index]."</label>";
                        $data .= "</span>";
                        $data .= self::tree($array, $array["ktg_id"][$index], $selected);
                        $data .= "</li>";
                    }
                }
                else{
                    $data .= "<li class='tree-folder'>";
                    $data .= "<span class='tree-folder-name'>";
                    $data .= "<input type='checkbox' name='".$inputName."[]' value='".$array["ktg_id"][$index]."'>";
                    $data .= "<i class='fa fa-folder-open'></i> ";
                    $data .= "<label class='tree-toggle'>".$array['ktg_adi'][$index]."</label>";
                    $data .= "</span>";
                    $data .= self::tree($array, $array["ktg_id"][$index]);
                    $data .= "</li>";
                }
            }
        }
        $data .= "</ul>";

        return $data;
    }
}