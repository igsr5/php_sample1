<?php
$zip="980-8463";

$zip=mb_convert_kana($zip,"a","UTF-8");

if(preg_match("/\A\d{3}[-]\d{4}\z/",$zip)){
    echo "郵便番号：".$zip;
}else{
    echo "郵便番号を正しく入れろ";
}
?>