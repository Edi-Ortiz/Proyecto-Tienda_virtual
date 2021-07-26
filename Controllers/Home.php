<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();

        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit, amet consectetur 
            adipisicing elit. Molestias dolorem in dolore! Placeat eius omnis, 
            est veniam facilis quas quidem, corporis totam accusamus eveniet 
            architecto autem neque, sit at optio.";
            $this->views->getView($this,"home",$data);

        }

        


    }

?>