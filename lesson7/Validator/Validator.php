<?php
	class Validator{
		private $form_fields = [];
		public function __construct($form_response){
			$this->form_fields = $form_response;
			return $this;
		}
	}