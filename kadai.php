<?php
$height = 230;

if ($height < 150){
   echo "150cm 未満の方はご乗車できません";
}

elseif ($height >= 200){
  echo "200cm以上の方はご乗車できません。";
}

 else {
   echo "ご乗車になれます。";
}
echo "\n";

$weekday = "月曜";

switch ($weekday){
  case "月曜":
  case "木曜":
   echo "可燃ゴミの日です";
   break;
  case "水曜":
   echo "資源ごみの日です";
   break;
  default:
   echo "回収はありません";
  break;

}
 echo "\n";

// ここから課題1

$name = "kamono yoshiyasu";

if ($name = "kamono yoshiyasu"){
  echo "私は.$name.です";
}else{
  echo "$name.ではありません";
}
echo "\n";

// 2
for($i = 0; $i < 1000; $i++){
  //  echo $i;
  $total += $i;
}

echo $total."\n";


// 3
$fruits = array("甘蕉","林檎","白桃","葡萄","西瓜");

foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
}

// 4
/* for文の始めの値を定義する /
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}
