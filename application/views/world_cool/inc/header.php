<?php 

    if($companyData->header_id==1){
        $this->load->view($theme_path."/inc/header1/header");
    }
    elseif($companyData->header_id==2)
    {
        $this->load->view($theme_path."/inc/header2/header");
    }
    elseif($companyData->header_id==3)
    {
        $this->load->view($theme_path."/inc/header3/header");
    }
    elseif($companyData->header_id==4)
    {
        $this->load->view($theme_path."/inc/header4/header");
    }

?>
