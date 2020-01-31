<?php


namespace App\Framework;


/**
 * Interface ControllerInterface
 * @package App\Framework
 */
interface ControllerInterface
{
    /**
     * @return mixed
     */
    public function render();

    /**
     * @return mixed
     */
    public function loadLayout();

}
