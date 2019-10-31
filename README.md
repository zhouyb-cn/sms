<h1 align="center"> sms </h1>

<p align="center"> 创蓝253发短信package </p>


## Installing

```shell
$ composer require zhouyb/sms -vvv
```

## Usage

首先需要先在[创蓝253]()注册账号，获取account和password

```
use Zhouyb\Sms\Sms;

$account = '****';
$password = '****';

$sms = new Sms($account, $password);

$response = $sms->sendSms('133********', '您的验证码为1032，验证码2小时后失效。');

```

## 参数说明

sendSms(string $phone, string $messaghe)

$phone 要发送的手机号码
$message 发送的短信内容


## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zhouyb/sms/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zhouyb/sms/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT