<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->language->load('common/footer');
		
		$data['text_project'] = $this->language->get('text_project');
		$data['text_documentation'] = $this->language->get('text_documentation');
		$data['text_support'] = $this->language->get('text_support');
		$data['taiwan_support'] = $this->language->get('taiwan_support');
		$data['good119'] = $this->language->get('good119');
		$data['text_footer'] = $this->language->get('text_footer');

		return $this->load->view('common/footer', $data);
	}
}