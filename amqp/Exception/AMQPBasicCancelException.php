<?php

class AMQPBasicCancelException extends Exception implements AMQPExceptionInterface
{
    public $consumerTag;

    public function __construct($consumerTag)
    {
        $this->consumerTag = $consumerTag;
    }
}