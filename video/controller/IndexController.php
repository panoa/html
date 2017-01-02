<?php
// 
require_once(dirname(__FILE__) . "/../../controller/BaseController.php");
require_once(dirname(__FILE__) . "/../model/ListModel.php");
/**
 *
 */
class IndexController extends BaseController {
  // Override
  public function loadModel() {
    // モデル作成
    $this->model['title'] = "動画";
    $this->model['viewFile'] = dirname(__FILE__) . "/../view/index.php";

    $listModel = new ListModel();
    $listModel->generate();
    $this->model = $this->model + $listModel->getModel();
  }
  
  // Override
  function show($tpl_file) {
    $this->loadModel();
 
    // ビューの描画
    parent::show($tpl_file);
  }
}

?>
