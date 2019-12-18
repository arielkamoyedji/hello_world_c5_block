<?php

namespace Concrete\Package\HelloWorldPackage\Block\HelloWorld;
use \Concrete\Core\Block\BlockController;
use \Concrete\Core\Error\ErrorList\Error\Error;

defined('C5_EXECUTE') or die("Access Denied.");

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
        if($args["booleanField"] == "1")
        {
            $this->booleanField = "Yes";
        }
        else
        {
            $this->booleanField = "No";
        }

        parent::save($args);
    }

    public function validate($args)
    {
        if(empty($args["field1"]) || empty($args["field2"]))
        {
            return new Error("No empty field allowed.");
        }
    }

    public function view()
    {
        $this->set("field1", $this->field1);
        $this->set("field2", $this->field2);
        $this->set("booleanField", $this->booleanField);
    }
}