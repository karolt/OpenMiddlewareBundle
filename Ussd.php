<?php
namespace OpenMiddleware\Bundle;


class Ussd
{

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $message;

    /**
     * @param $to
     * @param $message
     */
    function __construct($to, $message)
    {
        $this->setTo($to);
        $this->setMessage($message);
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }
}
