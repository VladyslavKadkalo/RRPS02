<?php

/**
 * Class Delegate
 */
class Delegate
{
    private $delegate;

    public function setDelegate(Callable $delegate)
    {
        $this->delegate = $delegate;
    }

    public function run()
    {
        call_user_func($this->delegate);
    }
}

$delegate = new Delegate();

$delegate->setDelegate(function () {
    echo "Hello world!";
});

$delegate->run();

