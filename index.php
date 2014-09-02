<?php
//phpinfo();
class InIt{

	static public function url()
	{
		return 'http://127.0.0.1';
	}

	static public showUrl()
	{
		echo InIt::url();
	}
}
InIt::showUrl();