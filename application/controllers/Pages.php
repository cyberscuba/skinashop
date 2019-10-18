<?php
class Pages extends CI_Controller{
    function view($page = 'shop_welcome')
    {
        if(!file_exists('application/views/'.$page.'.php'))
        {
            show_404();
        }
        $this->load->view($page);
    }
}
?>