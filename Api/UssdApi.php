<?php
namespace OpenMiddleware\Bundle\Api;

use OpenMiddleware\Bundle\Ussd;

class UssdApi extends Api
{
    const METHOD_SEND_USSD = "sendUssd";

    public function send(Ussd $ussd)
    {
        $data = [
            'msg'   => $ussd->getMessage(),
            'to'    => $ussd->getTo()
        ];

        $response = $this->makeCall(self::METHOD_SEND_USSD, $data);
    }
}
