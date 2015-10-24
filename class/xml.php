<?php
class XML {
	
	private $allfiles = array();
	
	function __construct(){}
	
	function getAllXmlFiles($dir){
		if(is_dir($dir)){
			$children = scandir($dir);
			foreach($children as $child){
				if($child!='.'&&$child!='..'){
					if(is_dir($dir.'/'.$child)){
						$this->getAllXmlFiles($dir.'/'.$child);
					}
					else{
						if(preg_match('/^.+\.xml$/i', $child)){
							$this->allfiles[] = $dir.'/'.$child;
						}
					}
					
				}
			}
		}
		else{
			return 'error';
		}
		return $this->allfiles;
	}
}