
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$answer1 = trim($_POST['answer1']);
$answer2 = trim($_POST['answer2']);
$answer3 = trim($_POST['answer3']);

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if ($question1 == $answer1) {
    $result1 = '正解！';
}else{
    $result1 ='残念・・・';
}

if ($question2 == $answer2) {
    $result2 = '正解！';
}else{
    $result2 ='残念・・・';
}

if ($question3 == $answer3) {
    $result3 = '正解！';
}else{
    $result3 ='残念・・・';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>結果</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<p><!--POST通信で送られてきた名前を表示-->
<?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result1 ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result2 ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result3 ?>

</body>
</html>