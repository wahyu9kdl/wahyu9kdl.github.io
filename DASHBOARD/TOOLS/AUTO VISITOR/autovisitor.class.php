<?php
error_reporting(0);
require("randomua.class.php");

class autovisitor extends Random_UA {

	public function __construct($url) {
		$this->url = $url;
	}

	private function curl() {
		$ch = curl_init();
		CURL_SETOPT($ch, CURLOPT_URL, $this->url);
		CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array('Referer: '.$this->acakReferer(),
												   'User-Agent: '.$this->generate()));
		CURL_SETOPT($ch, CURLOPT_FOLLOWLOCATION, true);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYHOST, 1);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 1);
		CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
		CURL_SETOPT($ch, CURLOPT_USERAGENT, $this->generate());
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

	private function xflush() {
    	static $output_handler = null;
    	if ($output_handler === null) {
        	$output_handler = @ini_get('output_handler');
    	}
    	if ($output_handler == 'ob_gzhandler') {
        	return;
    	}
    	flush();
    	if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) {
       		@ob_flush();
    	} else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) {
       		@ob_end_flush();
        	@ob_start();
    	}
	}

	private function acakReferer() {
		$list = array();
		/* Asal traffic yang di submit */ 
		$list[] = "http://facebook.com";
		$list[] = "http://google.com.sg";
		$list[] = "http://twitter.com";
 		$list[] = "http://facebook.com";
        $list[] = "http://google.com.sg";
	    $list[] = "http://twitter.com";
	    $list[] = "http://google.co.id";
	    $list[] = "http://google.com.my";
	    $list[] = "http://google.jp";
	    $list[] = "http://google.us";
	    $list[] = "http://google.tl";
	    $list[] = "http://google.ac";
	    $list[] = "http://google.ad";
	    $list[] = "http://google.ae";
	    $list[] = "http://google.af";
	    $list[] = "http://google.ag";
	    $list[] = "http://google.ru";
	    $list[] = "http://google.by";
	    $list[] = "http://google.ca";
	    $list[] = "http://google.cn";
	    $list[] = "http://google.cl";
	    $list[] = "http://google.cm";
	    $list[] = "http://google.cv";
	    $list[] = "http://google.gg";
	    $list[] = "http://google.ge";
	    $list[] = "http://google.gr";
	    $list[] = "http://google.com.tw";
	    $list[] = "https://search.yahoo.com";
        $list[] = "http://www.kata-h.blogspot.com";
        $list[] = "https://youtu.be/twq6zIBYnis";
        $list[] = "https://linkr.bio/traffic";
        $list[] = "https://kata-h.blogspot.com";
        $list[] = "https://heylink.me/Page/";
        $list[] = "https://billing.exabytes.co.id/aff.php?aff=8303039";
        $list[] = "https://www.site123.com/?aff=7141773";
        $list[] = "https://business.facebook.com/Awgroupchannel/?fref=nf";
        $list[] = "https://jali.me/Hikmah";
        $list[] = "https://sfile.mobi/6BKbK9zgIM8";
        $list[] = "https://himadanbijaksana.page.link/Site?d=1";
        $list[] = "https://youtu.be/JMzBMqlaDhI";
        $list[] = "https://github.com/wahyu9kdl";
        $list[] = "hhttps://www.awgroupchannel.my.id/p/auto.html";
        $list[] = "https://youtu.be/JMzBMqlaDhI";
        $list[] = "https://youtu.be/twq6zIBYnis";
        $list[] = "http://google.cn";
        $list[] = "http://google.cl";
        $list[] = "http://google.cm";
        $list[] = "http://google.cv";


		$acak = array_rand($list,1);
		return $list[$acak];
	}

	public function jalankan() {
		$this->xflush();

		$this->curl();
		return $this->acakReferer(); 

		$this->xflush();
	}

}
?>