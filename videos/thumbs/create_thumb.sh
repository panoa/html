#!/bin/bash

# 動画ファイルディレクトリ
MOVIE_DIR="/data/share_matsuzaki/動画/800.過去ビデオ"

# サムネイル画像出力先ディレクトリ
#THUMB_DIR="/var/www/html/videos/thumbs"
THUMB_DIR="${MOVIE_DIR}/thumbs"
mkdir -p ${THUMB_DIR}

# すべてのmp4ファイルで処理
for file in $(ls ${MOVIE_DIR}/*mp4); do
  # echo $file;
  title=$(basename $file | sed "s/.mp4//");
  
  # -ss:10秒の位置
  # -vframes:1フレーム切出し
  # -f:image2形式で出力
  # -s:出力サイズ
  #echo "ffmpeg -i ${file} -ss 10 -vframes 1 -f image2 -s 320x240 ${THUMB_DIR}/${title}.jpg"
  ffmpeg -i ${file} -ss 10 -vframes 1 -f image2 -s 320x240 ${THUMB_DIR}/${title}.jpg
done
