<?php

namespace Amqp\Consumer;

class Consumer extends AbstractConsumer
{
    /**
     * @param string $queue
     * @param callable $callback
     * @param array $options
     * @return void
     */
    public function listen($queue, callable $callback, array $options = array())
    {
        return $this->adapter->listen($queue, $callback, $options);
    }

    /**
     * @param string $queue
     * @return \Amqp\Message\MessageInterface
     */
    public function getMessage($queue)
    {
        return $this->adapter->getMessage($queue);
    }
}