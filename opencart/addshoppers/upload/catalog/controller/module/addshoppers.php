<?php
// -------------------------------
// AddShoppers for OpenCart 
// By AddShoppers
// www.addshoppers.com
// -------------------------------
?>
<?php  
class ControllerModuleAddShoppers extends Controller {
	
	protected function index() {
		
		$this->data['code'] = $this->config->get('addshoppers_code');
		
		$this->id = 'addshoppers';

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/addshoppers.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/addshoppers.tpl';
		} else {
			$this->template = 'default/template/module/addshoppers.tpl';
		}
				
		$this->response->setOutput($this->render());		
	}
}
?>