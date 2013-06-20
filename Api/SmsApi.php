<?php
namespace OpenMiddleware\Bundle\Api;

use OpenMiddleware\Bundle\Sms;

class SmsApi extends Api
{
    public function send(Sms $sms)
    {
        $data = [
            'msg'   => $sms->getMessage(),
            'from'  => $sms->getFrom(),
            'to'    => $sms->getTo()
        ];

        $response = $this->makeCall("sendSms", $data);

       //var_dump($response->getBody(true));
    }
}
