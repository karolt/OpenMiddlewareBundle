<?php
namespace OpenMiddleware\Bundle\Api;

use OpenMiddleware\Bundle\Sms;

class SmsApi extends Api
{
    const METHOD_SEND_SMS = "sendSms";

    public function send(Sms $sms)
    {
        $data = [
            'msg'   => $sms->getMessage(),
            'from'  => $sms->getFrom(),
            'to'    => $sms->getTo()
        ];

        $response = $this->makeCall(self::METHOD_SEND_SMS, $data);
    }
}
