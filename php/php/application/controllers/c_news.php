<?php
class c_news extends CI_Controller {
       
        function __construct() {
	parent::__construct();
	$this->load->model("m_news");
}	

        function get_news ($p=0){
            $jppage=1;
            $this->load->library('pagination');
            $config['base_url']=base_url().'/c_news/get_rnews/';
            $config['total_rows']=$this->m_news->getjrecord();
            $config['per_page']=$jppage;
            $this->pagination->initialize($config);
            $data['pagination']=$this->pagination->create_links();
            $data['hslquery']=$this->m_news->get_news($p,$jppage);
            $data['headapp']="news";
            $data['main_content'] = 'site/v_news';
            $this->load->view('icludes/template', $data);
            }
}	
	
?>