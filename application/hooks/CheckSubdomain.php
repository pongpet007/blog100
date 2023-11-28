<?php 

class CheckSubdomain {
    private $ci ;    
    
    public function __construct(){
        $this->ci = & get_instance();        
    }

    public function check() {

        if(!$this->ci->session->has_userdata('site_lang')){
           $this->ci->session->set_userdata('site_lang',221);
           $this->ci->session->set_userdata('site_lang_name', "th");
        }

        if ($this->ci->uri->segment(1)=="us" or $this->ci->uri->segment(1)=="US") {

            $this->ci->session->set_userdata('site_lang', 236);
            $this->ci->session->set_userdata('site_lang_name', "us");
        }

        if ($this->ci->uri->segment(1)=="th" or $this->ci->uri->segment(1)=="TH") {

            $this->ci->session->set_userdata('site_lang', 221);
            $this->ci->session->set_userdata('site_lang_name', "th");

        }

        $controller = $this->ci->router->class;
        $method = $this->ci->router->method;
        $this->ci->lang->load($this->ci->session->userdata('site_lang'),'lang');
        
        $this->ci->db->select('expire,DATE_ADD(expire, INTERVAL 46 DAY) as next');
        $this->ci->db->from('company')
            ->where(' date_add(expire, INTERVAL 46 DAY ) >=  NOW() ');

        $query = $this->ci->db->get();
        $company = $query->row(0);
        if ($company) {
            // redirect("https://www.bestbrush-siphaya.com/Home/index2");
            ////////////// Check show view only//////////////////////////////////
            $this->ci->db->select('expire');
            $this->ci->db->from('company')
                ->where(' now() between  date_add(expire, INTERVAL 30 DAY ) and  date_add(expire, INTERVAL 46 DAY ) ');

            $query = $this->ci->db->get();
            $company2 = $query->row(0);
            if ($company2 && $method != 'viewonly') {
                redirect("Home/index2");
            }
            #####################################################################

        } else {
            if($method != 'index2'){                
                redirect("Home/index2");
            }
        }
        

    }
}




 ?>