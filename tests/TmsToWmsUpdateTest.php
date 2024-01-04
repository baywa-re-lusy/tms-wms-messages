<?php

namespace BayWaReLusy\TmsWmsMessages\Test;

use BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;
use PHPUnit\Framework\TestCase;

class TmsToWmsUpdateTest extends TestCase
{
    protected TmsToWmsUpdate $instance;

    protected function setUp(): void
    {
        $this->instance = new TmsToWmsUpdate();
    }

    public function testSetGetPickingOrderId()
    {
        $id = 'c9450096-cce9-41c6-9516-6dc9a92eed37';
        $this->instance->setPickingOrderId($id);
        $this->assertEquals($id, $this->instance->getPickingOrderId());
    }
}