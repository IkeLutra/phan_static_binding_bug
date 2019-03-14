<?php

class B extends A
{
    /**
     * {@inheritDoc}
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