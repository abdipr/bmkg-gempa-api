<?php
header("Content-Type: application/json");
require "simple_html_dom.php";
$author = "abdiputranar";

$html = file_get_html(
    "https://www.bmkg.go.id/gempabumi/gempabumi-dirasakan.bmkg"
);

$ret = [];
foreach ($html->find("tbody") as $e) {
    $b = $e->find("tr")[0];
    $wak = $b->find("td")[1]->plaintext;
    $lbj = $b->find("td")[2]->plaintext;
    $mag = $b->find("td")[3]->plaintext;
    $ked = $b->find("td")[4]->plaintext;
    $dir = $b->find("td")[5];
    $lok = $dir->find("a")[0]->plaintext;
    $wrn = $b->find("span");
 $wrn[0] = $wrn[0]->plaintext;
 $wrn[1] = $wrn[1]->plaintext;
 $wrn[2] = $wrn[2]->plaintext;
 $wrn[3] = $wrn[3]->plaintext;
 $wrn[4] = $wrn[4]->plaintext;
 $wrn[5] = $wrn[5]->plaintext;
 $wrn[6] = $wrn[6]->plaintext;
 $wrn[7] = $wrn[7]->plaintext;
 $wrn[8] = $wrn[8]->plaintext;
 $wrn[9] = $wrn[9]->plaintext;
 $wrn[10] = $wrn[10]->plaintext;
 $wrn[11] = $wrn[11]->plaintext;
 $wrn[12] = $wrn[12]->plaintext;
 $wrn[13] = $wrn[13]->plaintext;
 $wrn[14] = $wrn[14]->plaintext;
 $wrn[15] = $wrn[15]->plaintext;
 $wrn[16] = $wrn[16]->plaintext;
 $wrn[17] = $wrn[17]->plaintext;
 $wrn[18] = $wrn[18]->plaintext;
 $wrn[19] = $wrn[19]->plaintext;
 $wrn[20] = $wrn[20]->plaintext;
    $map = $dir->find("img")[0]->src;
}

if ($wrn[1] == "") {
    $wrn[2] = "";
    $wrn[3] = "";
    $wrn[4] = "";
    $wrn[5] = "";
    $wrn[6] = "";
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[2] == "") {
    $wrn[3] = "";
    $wrn[4] = "";
    $wrn[5] = "";
    $wrn[6] = "";
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[3] == "") {
    $wrn[4] = "";
    $wrn[5] = "";
    $wrn[6] = "";
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[4] == "") {
    $wrn[5] = "";
    $wrn[6] = "";
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[5] == "") {
    $wrn[6] = "";
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[6] == "") {
    $wrn[7] = "";
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[7] == "") {
    $wrn[8] = "";
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[8] == "") {
    $wrn[9] = "";
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[9] == "") {
    $wrn[10] = "";
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[10] == "") {
    $wrn[11] = "";
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[11] == "") {
    $wrn[12] = "";
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[12] == "") {
    $wrn[13] = "";
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[13] == "") {
    $wrn[14] = "";
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[14] == "") {
    $wrn[15] = "";
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[15] == "") {
    $wrn[16] = "";
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[16] == "") {
    $wrn[17] = "";
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[17] == "") {
    $wrn[18] = "";
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[18] == "") {
    $wrn[19] = "";
    $wrn[20] = "";
    
}
if ($wrn[19] == "") {
    $wrn[20] = "";
    
}

$warn = array_filter(["$wrn[0]", "$wrn[1]", "$wrn[2]", "$wrn[3]", "$wrn[4]", "$wrn[5]", "$wrn[6]", "$wrn[7]", "$wrn[8]", "$wrn[9]", "$wrn[10]", "$wrn[11]", "$wrn[12]", "$wrn[13]", "$wrn[14]", "$wrn[15]", "$wrn[16]", "$wrn[17]", "$wrn[18]", "$wrn[19]", "$wrn[20]"]);
$warn = json_encode($warn, JSON_PRETTY_PRINT);
$lb = explode(" ", $lbj);
$wakt[0] = substr($wak, 0, 10);
$wakt[1] = substr($wak, 12, 12);
$result = [
    "status" => "200",
    "author" => "$author",
    "result" => [
        "lokasi" => "$lok",
        "waktu" => "$wakt[0] $wakt[1]",
        "lintang" => "$lb[0] $lb[1]",
        "bujur" => "$lb[2] $lb[3]",
        "magnitudo" => "$mag",
        "kedalaman" => "$ked",
        "warning" => "awarn",
        "map" => "$map"
    ],
];
$result = array_filter($result);
echo str_replace(']",', '],', str_replace('g": "', 'g": ', str_replace("awarn", $warn, str_replace("\/", "/", json_encode($result, JSON_PRETTY_PRINT)))));
?>
