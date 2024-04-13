<!-- 連想配列をランダムにするために配列 -->
<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

foreach ($random_numbers as $index) {
  $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0, 3)];

// echo ('<pre>');
// var_dump($options);
// echo ('</pre>');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>

  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ヘッダー -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php04">
        Status Code Quiz
      </a>
    </div>
  </header>

  <!-- 問題文（黄色の部分） -->
  <main>
    <div class="quiz__content">
      <div class="question">
        <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
        <p class="question__text"></p>
      </div>

      <!-- クイズのフォーム -->
      <form class="quiz-form" action="result.php" method="post">
        <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">>
        <div class="quiz-form__item">

          <?php foreach ($options as $option): ?>

          <div class="quiz-form__group">
            <input class="quiz-form__radio" id="" type="radio" name="option" value="">
            <label class="quiz-form__label" for="">
            </label>
          </div>
        </div>
        <div class="quiz-form__button">
          <button class="quiz-form__button-submit" type="submit">
            回答
          </button>
        </div>
      </form>
    </div>
  </main>

  <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
  <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
    <?php echo $option['code'] ?>
  </label>

  <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">

  <form class="quiz-form" action="result.php" method="post">

</body>

</html>