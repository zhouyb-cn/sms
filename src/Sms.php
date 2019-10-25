<?php  

namespace Zhouyb\Sms;

use GuzzleHttp\Client;

class Sms 
{

	protected $account;
	protected $password;

	public function __construct($account, $password) {
		$this->account = $account;
		$this->password = $password;
	}

	public function getHttpClient() {
		return new Client();
	}

	public function sendSms($phone, $message) {
		$url = 'http://sms.253.com/msg/send/json';

		$param = [
			'account' => $this->account,
			'password' => $this->password,
			'phone' => $phone,
			'msg' => $message,
		];

		$response = $this->getHttpClient()->request('POST', $url, [
			'json' => $param
		])->getBody()->getContents();

		return json_decode($response, true);
	}
}



?>