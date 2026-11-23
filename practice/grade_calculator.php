<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績判定ツール</title>
</head>
<body>
<h1>1.成績判定ツール</h1>
<h2>①各学生の評価結果</h2>
<?php
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];
    $totalScore = 0;
    $passCount = 0;
    $failCount = 0;
    foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];
    $totalScore += $score;
    if ($score >= 60) {
    $passCount++;   // 1増やす
    } 
    else {
    $failCount++;
    }
    if ($score >= 90) {
        $grade = "A";
        echo $name . "さんは" . $score . "点で" . $grade . "評価で優秀です！<br>";
    } elseif ($score >= 80 && $score < 90) {
        $grade = "B";
        echo $name . "さんは" . $score . "点で" . $grade . "評価で良好です！<br>";
    } elseif ($score >= 70 && $score < 80) {
        $grade = "C";
        echo $name . "さんは" . $score . "点で" . $grade . "評価で普通です！<br>";
    } elseif ($score >= 60 && $score < 70) {
        $grade = "D";
        echo $name . "さんは" . $score . "点で" . $grade . "評価で要努力です！<br>";
    } else {
        $grade = "F";
        echo $name . "さんは" . $score . "点で" . $grade . "評価で不合格です！<br>";
        echo "<h2>②合格・不合格の人数</h2>";
        echo "合格者は" . $passCount . "人です！<br>";
        echo "不合格者は" . $failCount . "人です！<br>";
    }
    }
?>
<h2>③全体の平均点</h2>
<?php
    echo "全体の合計点は" . $totalScore . "点です！<br>";
    $averageScore = $totalScore / count($students);
    echo "全体の平均点は" . $averageScore . "点です！<br>";
?>
</html>