<?php

namespace OldSound\RabbitmqBundle\Rabbitmq;

use OldSound\RabbitmqBundle\Rabbitmq\Consumer;

class AnonConsumer extends Consumer
{
  public function __construct($conn)
  {
    parent::__construct($conn);
    
    $this->setQueueOptions(array('name' => '', 'passive' => false, 'durable' => false,
                                     'exclusive' => true, 'auto_delete' => true, 'nowait' => false,
                                     'arguments' => null, 'ticket' => null));
  }
}

?>