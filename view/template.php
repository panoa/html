<?php
  
  // 変数チェック
  if(!isValid()) {
    // errorページへリダイレクト
  }

  function isValid() {
    return true;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php echo $view->printHtml($title); ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/sample.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery.qrcode.js"></script>
  <script type="text/javascript" src="/js/qrcode.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
  <div id="modal-content">
    <div id="QRcode">
    </div>
    <p><a id="modal-close" class="button-link">閉じる</a></p>
  </div>
  <header></header>
  <nav id="headerNav">
    <ul>
      <li><a href="/">TOP</a></li>
      <li><a href="/video">動画</a></li>
      <li><a id="modal-open" class="button-link">QRコード</a></li>
    </ul>
  </nav>
  <section id="mainCotent">
    <?php
      include($viewFile);
    ?>
  </section>
  <footer></footer>
</body>
</html>
