<?php

namespace Sway\Vendor\UserWrapper\Exception\User;


class ComponentException extends \Exception
{
    /**
     * Throws an exception when required global varible is not exists
     * @param string $variableName
     * @return \Sway\Vendor\UserWrapper\Exception\User\ComponentException
     */
    public static function missedGlobalVariable(string $variableName) : ComponentException
    {
        return (new ComponentException(sprintf("Global variable '%s' is missing. Do you use swayengine?", $variableName)));
    }
    
    /**
     * Throws an exception when required global variable is empty (is null)
     * @param string $variableName
     * @return \Sway\Vendor\UserWrapper\Exception\User\ComponentException
     */
    public static function emptyGlobalVariable(string $variableName) : ComponentException
    {
        return (new ComponentException(sprintf("Global variable '%s' is empty (is null). Do you use swayengine?", $variableName)));
    }
}


?>

