<?php  

namespace Zhouyb\Sms;

use GuzzleHttp\Client;
use Zhouyb\Sms\Exception\HttpException;

class Sms 
{

	const URL = 'http://sms.253.com/msg/send/json';

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

		$param = [
			'account' => $this->account,
			'password' => $this->password,
			'phone' => $phone,
			'msg' => $message,
		];

		try {
			$response = $this->getHttpClient()->request('POST', self::URL, [
				'json' => $param
			])->getBody()->getContents();

			return json_decode($response, true);
		} catch (\Exception $e) {
			throw new HttpException($e->getMessage(), $e->getCode(), $e);
		}

	}
}



?>