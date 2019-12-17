<?php

namespace Application\Block\HelloWorld;
use \Concrete\Core\Block\BlockController;
use \Concrete\Core\Error\ErrorList\Error\Error;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btInterfaceHeight = 200;
    protected $btInterfaceWidth = 400;
    protected $btTable = "btHelloWorld";
    public $field1 = "";
    public $field2 = "";
    public $booleanField = "";

    public function getBlockTypeName()
    {
        return t("Hello World");
    }

    public function getBlockTypeDescription()
    {
        return t("This block is a test block.");
    }

    public function save($args)
    {
        if(isset($args["booleanField"]))
        {
            $args["booleanField"] = "1";
            $this->booleanField = "Yes";
        }
        else
        {
            $args["booleanField"] = "0";
            $this->booleanField = "No";
        }

        parent::save($args);
    }

    public function validate($args)
    {
        foreach (array_values($args) as $arg)
        {
            if(strcmp($arg, "") == 0)
            {
                return new Error("No empty field allowed");
            }
        }
    }

    public function view()
    {
        $this->set("helloWorldField1", $this->helloWorldField1);
        $this->set("helloWorldField2", $this->helloWorldField2);
        $this->set("helloWorldBooleanValue", $this->helloWorldBooleanValue);
    }
}