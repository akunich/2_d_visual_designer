<?php
/*
 *    location: admin/controller
 */

class ControllerExtensionDVisualDesignerModuleRowInner extends Controller
{
    private $codename = 'row_inner';
    private $route = 'extension/d_visual_designer_module/row_inner';

    public function __construct($registry)
    {
        parent::__construct($registry);
        
        $this->load->language($this->route);
    }

    public function options(){
        $data = array();

        $data['layout_sizes'] = array('12', '6+6', '4+4+4', '3+3+3+3', '8+4', '4+8', '3+9', '9+3', '6+3+3', '3+3+6', '3+6+3');

        $data['aligns'] = array(
            'left' => $this->language->get('text_left'),
            'center' => $this->language->get('text_center'),
            'right' => $this->language->get('text_right')
        );

        return $data;
    }

    public function local()
    {
        $data = array();

        $data['entry_background_video'] = $this->language->get('entry_background_video');
        $data['entry_video_link'] = $this->language->get('entry_video_link');
        $data['entry_align'] = $this->language->get('entry_align');

        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_yes'] = $this->language->get('text_yes');
        $data['text_no'] = $this->language->get('text_no');
        $data['text_set_custom'] = $this->language->get('text_set_custom');

        return $data;
    }
}