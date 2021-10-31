<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
//2倍にして返す X2
function double($double) {
    $double *= 2;
    return $double;
}
echo "5 x 2 = ". double(5);
echo "\n";

//同じものを足す
function double2($double2) {
    $double2 += $double2;
    return $double2;
}
echo "7 + 7 = ". double2(7);
echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
//$aと$bを足した結果を返す
function add($a, $b) {
    $result = $a + $b;
    return $result;
}
echo "5 + 8 = ". add(5, 8);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
//引数をすべてかける
function multiply ($arr) {
    $score = 1;
    for($i = 0; $i < count($arr); $i++) {
        $score *= $arr[$i];
    }
    return $score;
}
echo "1 x 3 x 5 x 7 x 9 =". multiply( array(1, 3, 5, 7, 9,) );
echo "\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //$aが$max_numberよりおおきければ上書き
    if($a > $max_number){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 //↓↓確認用に入れた内容
 echo "配列で一番大きいのは、". max_array(array(3,8,4,6,5,1,12));
 echo "\n";
 
 //max()を使って見る
 function max_array2($arr2){
     $max_number2 = max($arr2);
     return $max_number2;
 }
 echo "配列で一番大きいのは、".  max_array2(array(12,54,65,1,78));
 echo "\n";
 
 //並び替えて1番目を取得
 function max_array3($arr3){
     arsort($arr3);
     $arr4 = array_values($arr3);
     $max_number3 = $arr4[0];
     return $max_number3;
 }
 echo "配列で一番大きいのは、".  max_array3(array(11,33,22,55,88));
 echo "\n";
 
 //5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
 //strip_tagsについて
 $text = "<p>文字列から HTML および PHP タグを取り除く</p>";
 echo strip_tags($text);
 echo "\n";
 
 //array_pushについて
 $arr_push = array("あ", "い", "う");
 array_push($arr_push, "え", "お");
 print_r($arr_push);
 
 //array_mergeについて
 $array1 = array("色" => "赤", "2", "4");
 $array2 = array("a", "b", "色" => "緑", "形" => "四角");
 $merge = array_merge($array1, $array2);
 print_r($merge);
 
 //time, mktimeについて
 //協定世界時(UTC)を基準にした1970年1月1日の0時0分0秒からの経過秒数
 //現在時刻のUNIXタイムスタンプを取得
 echo time();
 echo "\n";
 //指定した日時のUNIXタイムスタンプを取得 時 , 分 , 秒 , 月 , 日 , 年
 echo mktime(0,0,0,10,31,2021);
 echo "\n"; 
 
 //dateについて
 //タイムゾーンの設定
 date_default_timezone_set('Asia/Tokyo');
 //Y・・・年4桁　m・・・月2桁　d・・・日・・・2桁
 echo date("Y/m/d");
 echo "\n";