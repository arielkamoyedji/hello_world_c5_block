<?php

namespace Concrete\Package\HelloWorldPackage;

defined("C5_EXECUTE") or die("Access denied.");

use Concrete\Core\Http\Request;
use \Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

class Controller extends Package
{
    protected $appVersionRequired = "";
    protected $pkgHandle = "hello_world_package";
    protected $pkgVersion = "0.0";

    public function getPackageName()
    {
        return t("Hello World Package");
    }

    public function getPackageDescription()
    {
        return t("This package installs the previously created Hello World block type.");
    }

    public function install()
    {
        $request = Request::getInstance();

        if($request->get("install_checkbox"))
        {
            $pkg = parent::install(); // TODO: Change the autogenerated stub

            $bt = BlockType::getByHandle("hello_world");

            if(!$bt)
            {
                BlockType::installBlockType("hello_world", $pkg);
            }
        }
    }

    public function uninstall()
    {
        $request = Request::getInstance();

        if($request->get("uninstall_checkbox"))
        {
            parent::uninstall(); // TODO: Change the autogenerated stub
        }
    }
}