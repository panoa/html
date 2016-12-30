<?php
  $TARGET_DIR = "/data/share_matsuzaki/動画/800.過去ビデオ";

  $images = array();
  $movies = array();
  $moviesDir = opendir($TARGET_DIR);

  // 動画ファイルリストを取得
  while ($file = readdir($moviesDir)) {
    // 「.」「..」の削除
    if($file == '.' || $file == '..') {
      continue;
    }

    // 拡張子がmp4以外は除外
    $info = new SplFileInfo($file);
    $ext = $info->getExtension();
    if($ext != 'mp4') {
      continue;
    }

    $movies[] = $file;
  }

  //debug文の出力
  if($debug) {
    var_dump($movies);
  }
?>
