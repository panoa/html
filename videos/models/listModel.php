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

    $movies[] = mb_basename($file, ".mp4");
 
  }
   
  // ソート処理
  sort($movies);

  //debug文の出力
  if($debug) {
    var_dump($movies);
  }

  /**
   * マルチバイト対応のbasename関数
   */
  function mb_basename($str, $suffix=null){
    $tmp = preg_split('/[\/\\\\]/', $str);
    $res = end($tmp);
    if(strlen($suffix)){
        $suffix = preg_quote($suffix);
        $res = preg_replace("/({$suffix})$/u", "", $res);
    }
    return $res;
  }
?>
