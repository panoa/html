<?php
  $debug = false;

  require_once(dirname(__FILE__) . '/models/listModel.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>動画リスト</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="css/sample.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="js/sample.js"></script>
</head>
<body>
  <header></header>
  <section>
    <table id="movieList">
      <tbody>
        <?php
  foreach($movies as $movieTitle) {
      echo "<tr>";
        echo "<td class=\"thumb\">";
          echo "<a href=\"$TARGET_DIR/$movieTitle.mp4\"><img src=\"$TARGET_DIR/thumbs/$movieTitle.jpg\" /></a>";
        echo "</td>";
        echo "<td class=\"link\">";
          echo "<a href=\"$TARGET_DIR/$movieTitle.mp4\">$movieTitle</a>";
        echo "</td>";
      echo "</tr>";
  }
        ?>
      </tbody>
    </table>
  </section>
  <footer></footer>
</body>
</html>
