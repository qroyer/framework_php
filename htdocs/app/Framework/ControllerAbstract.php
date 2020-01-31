<?php

namespace App\Framework;

/**
 * Class ControllerAbstract
 * @package App\Framework
 */
abstract class ControllerAbstract implements ControllerInterface
{

    /**
     * @var
     */
    private $body;
    /**
     * @var
     */
    private $header;
    /**
     * @var
     */
    private $footer;


    /**
     *
     */
    public function loadLayout()
    {
        $this->setFooter('footer.phtml');
        $this->setHeader('header.phtml');
    }


    /**
     *
     */
    public function render()
    {
        require(TEMPLATE_DIR.$this->getHeader());
        require(TEMPLATE_DIR.$this->getBody());
        require(TEMPLATE_DIR.$this->getFooter());
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param $footer
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
        return $this;
    }


}
