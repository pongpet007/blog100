<?php 

    if($companyData->footer_id==2){
        $this->load->view($theme_path."/inc/footer2/footer");
    }
    else
    {
        $this->load->view($theme_path."/inc/footer1/footer");
    }

?>
