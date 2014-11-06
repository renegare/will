<?php

namespace Will\Be;

class Thrown {
    /**
     * @param boolean $condition
     * @param \Exception $exception
     * @return void
     * @throws \Exception - when $condition === true
     */
    public static function when($condition, \Exception $exception) {
        if($condition) {
            throw $exception;
        }
    }
}
