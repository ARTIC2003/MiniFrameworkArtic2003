<?php

	class Home extends Controllers{
		public function __construct(){
			parent::__construct();
		}

		public function home() {
			// Estos datos podrian ser llenados desde una base de datos y enviarlo a las vista
			$data['page_id'] = 1;
			$data['page_tag'] = "Home";
			$data['page_title'] = "Pagina principal";
			$data['page_name'] = "home";
			$data['page_content'] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
			$this->views->getView($this, "home", $data);
		}
	}
