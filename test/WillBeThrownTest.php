<?php

class WillBeThrownTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException LogicException
     * @expectedExceptionMessage WTH!?
     */
    public function test_exception_is_thrown_when_condition_is_true() {
        Will\Be\Thrown::when(true !== false, new \LogicException('WTH!?'));
    }

    public function test_exception_is_NOT_thrown_when_condition_is_false() {
        Will\Be\Thrown::when(true === false, new \LogicException('WTH!?'));
    }
}
