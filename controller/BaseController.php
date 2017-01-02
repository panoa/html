<?php
class BaseController {
  // 
  protected $model = array();

  // 
  public function loadModel() {
  }

  /**
   *
   */
  public function show($tpl_file) {
    $view = $this;

    extract($this->model);

    include(dirname(__FILE__) . "/../view/{$tpl_file}");
  }

  /**
   *
   * htmlエスケープした文字列を返す
   *
   */
  public function printHtml($val) {
    return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
  }
}
?>
