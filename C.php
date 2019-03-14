<?php

class C extends A
{
    /**
     * @return static
     */
    public static function create($mode = 'r')
    {
        return parent::create($mode);
    }

    public function doSomething()
    {
        return 'hello';
    }
}