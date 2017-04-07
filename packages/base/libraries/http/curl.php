<?php
namespace packages\base\http;
use \packages\base\http\handler;
use \packages\base\http\serverException;
use \packages\base\http\clientException;
class curl implements handler{
	public function fire(request $request, array $options):response{
		$ch = curl_init( $request->getURL());
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request->getMethod());
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getBody());
		if(isset($options['timeout']) and $options['timeout'] > 0){
			curl_setopt($ch, CURLOPT_TIMEOUT_MS, $options['timeout'] * 1000000);
		}
		if(isset($options['connent_timeout']) and $options['connect_timeout'] > 0){
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $options['connent_timeout'] * 1000000);
		}
		if(isset($options['allow_redirects'])){
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $options['allow_redirects']);
		}
		if(isset($options['cookies'])){
			curl_setopt($ch, CURLOPT_COOKIEFILE, $options['cookies']);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $options['cookies']);
		}
		if(isset($options['ssl_verify'])){
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,$options['ssl_verify']);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,$options['ssl_verify']);
		}
		$headers = array();
		foreach($request->getHeaders() as $name => $value){
			$headers[] = $name.': '.$value;
		}
		if(!empty($headers)){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		$header = '';
		$body = '';
		if(strpos($result, "\r\n\r\n") !== false){
			list($header, $body) = explode("\r\n\r\n", $result, 2);
		}else{
			$body = $result;
		}
		$header = $this->decodeHeader($header);
		return new response($info['http_code'], $header, $body);
	}
	private function decodeHeader(string $header):array{
		$result = array();
		$lines = explode("\r\n", $header);
		$length = count($lines);
		for($x = 1;$x < $length;$x++){
			$line = explode(":", $lines[$x], 2);
			$result[$line[0]] = isset($line[1]) ? ltrim($line[1]) : '';
		}
		return $result;
	}
}