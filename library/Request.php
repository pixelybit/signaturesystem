<?php
class Request{
	protected $url;
	public function __construct($url){
		$this->url = $url;
	}

	public function getUrl(){
		return $this->url;
	}
}
?>