<?php
header("Content-Type: application/json");
require "../simple_html_dom.php";
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
  for ($i = 0; $i <= 20; $i++) {
      $wrn[$i] = $wrn[$i]->plaintext;
  }
    $map = $dir->find("img")[0]->src;
}
for ($i = 1; $i <= 19; $i++) {
    if ($wrn[$i] == "") {
        for ($j = $i + 1; $j <= 20; $j++) {
            $wrn[$j] = "";
        }
    }
}
$warn = array_filter(["$wrn[0]", "$wrn[1]", "$wrn[2]", "$wrn[3]", "$wrn[4]", "$wrn[5]", "$wrn[6]", "$wrn[7]", "$wrn[8]", "$wrn[9]", "$wrn[10]", "$wrn[11]", "$wrn[12]", "$wrn[13]", "$wrn[14]", "$wrn[15]", "$wrn[16]", "$wrn[17]", "$wrn[18]", "$wrn[19]", "$wrn[20]"]);
$warn = json_encode($warn, JSON_PRETTY_PRINT);
$lb = explode(" ", $lbj);
$wakt[0] = substr($wak, 0, 10);
$wakt[1] = substr($wak, 12, 12);
$id = str_replace(".mmi.jpg", "", str_replace("https://static.bmkg.go.id/", "", $map));
$result = [
    "status" => "200",
    "author" => "$author",
    "result" => [
        "id" => "$id",
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
