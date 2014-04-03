phpamqplib-extension-for-hhvm
=============================

phpamqplib extension for hhvm

##file list:##
hphp/system/php/amqp/Exception/AMQPExceptionInterface.php
hphp/system/php/amqp/Exception/AMQPBasicCancelException.php
hphp/system/php/amqp/Exception/AMQPTimeoutException.php
hphp/system/php/amqp/Exception/AMQPRuntimeException.php
hphp/system/php/amqp/Exception/AMQPOutOfBoundsException.php
hphp/system/php/amqp/Exception/AMQPIOException.php
hphp/system/php/amqp/Exception/AMQPInvalidArgumentException.php
hphp/system/php/amqp/Helper/MiscHelper.php
hphp/system/php/amqp/Wire/AMQPWriter.php
hphp/system/php/amqp/Wire/Constants080.php
hphp/system/php/amqp/Wire/Constants091.php
hphp/system/php/amqp/Wire/AMQPDecimal.php
hphp/system/php/amqp/Wire/IO/AbstractIO.php
hphp/system/php/amqp/Wire/IO/SocketIO.php
hphp/system/php/amqp/Wire/IO/StreamIO.php
hphp/system/php/amqp/Helper/Protocol/MethodMap080.php
hphp/system/php/amqp/Helper/Protocol/MethodMap091.php
hphp/system/php/amqp/Helper/Protocol/Protocol080.php
hphp/system/php/amqp/Helper/Protocol/Protocol091.php
hphp/system/php/amqp/Helper/Protocol/Wait080.php
hphp/system/php/amqp/Helper/Protocol/Wait091.php
hphp/system/php/amqp/Wire/AMQPReader.php
hphp/system/php/amqp/Wire/GenericContent.php
hphp/system/php/amqp/Message/AMQPMessage.php
hphp/system/php/amqp/Connection/AMQPStreamConnection.php
hphp/system/php/amqp/Connection/AMQPConnection.php
hphp/system/php/amqp/Connection/AMQPSSLConnection.php
hphp/system/php/amqp/Connection/AMQPLazyConnection.php
hphp/system/php/amqp/Channel/AbstractChannel.php
hphp/system/php/amqp/Exception/AMQPProtocolException.php
hphp/system/php/amqp/Exception/AMQPProtocolChannelException.php
hphp/system/php/amqp/Channel/AMQPChannel.php
hphp/system/php/amqp/Exception/AMQPProtocolConnectionException.php
hphp/system/php/amqp/Connection/AbstractConnection.php
hphp/system/php/amqp/Connection/AMQPSocketConnection.php
hphp/system/php/amqp/Exception/AMQPException.php
hphp/system/php/amqp/Exception/AMQPChannelException.php
hphp/system/php/amqp/Exception/AMQPConnectionException.php

##description:##
source code by [https://github.com/videlalvaro/php-amqplib](https://github.com/videlalvaro/php-amqplib)

##demo:##
With RabbitMQ running open two Terminals and on the first one execute the following commands to start the consumer:

$ cd php-amqplib/demo
$ php amqp_consumer.php
Then on the other Terminal do:

$ cd php-amqplib/demo
$ php amqp_publisher.php some text to publish
You should see the message arriving to the process on the other Terminal

Then to stop the consumer, send to it the quit message:

$ php amqp_publisher.php quit

