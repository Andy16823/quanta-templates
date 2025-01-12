<?php
use Quanta\Quanta;
use Quanta\Core\Module;


class MyModule extends Module
{
    private ?Quanta $quanta;

    public function dispose($quanta)
    {
        $this->quanta = null;
    }

    public function load($quanta)
    {
        $this->quanta = $quanta;
        // Add your code here
    }
}
