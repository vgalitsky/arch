<?php
declare(strict_types=1);
namespace Cl\Able\Disableable;

interface DisableableInterface
{
    function isEnabled();
    function disable();
    function enable();

}