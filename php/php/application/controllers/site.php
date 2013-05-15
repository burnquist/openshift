<?php
class site extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    function index ()
    {
        $this->load->view('site/index.php');
    }
        
    function about ()
    {
        $this->load->view('site/about.php');
    }
    
    function contacts ()
    {
        $this->load->view('site/contacts.php');
    }
    
    function gallery ()
    {
        $this->load->view('site/gallery.php');
    }
    
    function privacy ()
    {
        $this->load->view('site/privacy.php');
    }
    
    function sitemap ()
    {
        $this->load->view('site/sitemap.php');
    }
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
