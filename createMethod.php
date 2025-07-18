<?php

class BadClass
{
    public $unusedProperty;

    public function doSomething($unusedParam)
    {
        $foo = 1;
        if ($foo == 1) {
            if ($foo == 1) {
                if ($foo == 1) {
                    if ($foo == 1) {
                        echo "Too many nested ifs!";
                    }
                }
            }
        }
    }

    public function unusedMethod()
    {
        return true;
    }
}
