<?php
$name = "Ayumi";
if ($name = "Ayumi") {
    echo "私は" . $name . "です";
} else {
    echo $name . "ではありません";
}
echo "\n";

$total = 0;
for ($i = 1; $i <= 10000; $i ++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("いちご", "もも","さくらんぼ","なし","ぶどう");
foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i ++){
    if ($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
