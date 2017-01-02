<?php
// 
require(dirname(__FILE__) . "/BaseController.php");
/**
 *
 */
class IndexController extends BaseController {
  // Override
  public function loadModel() {
    // モデル作成
    $this->model['title'] = "TOP";
    $this->model['viewFile'] =  dirname(__FILE__) . "/../view/index.php";
  }

  // Override
  public function show($tpl_file) {
    $this->loadModel();
 
    // ビューの描画
    parent::show($tpl_file);
  }
}

?>
