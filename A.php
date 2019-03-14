<?php

class A
{
    
    /**
     * @return static
     */
    public static function create($mode = 'w')
    {
        return new static();
    }
}