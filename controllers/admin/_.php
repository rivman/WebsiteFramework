<?php
namespace controllers\admin;
use \timer as timer;
use \models as models;
class _ extends \controllers\_ {

	function __construct() {
		$this->f3 = \Base::instance();
		parent::__construct();
		$this->user = $this->f3->get("user");
		$this->cfg = $this->f3->get("cfg");
		$this->params = $this->f3->get("PARAMS");
		$this->f3->set("__runJSON", false);
		
		
	}

	function templatefile($class){
		$class = str_replace("controllers\\front\\","",$class);
		return $class;
		
	}

	
}
