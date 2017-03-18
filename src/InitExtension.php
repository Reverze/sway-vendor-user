<?php

namespace Sway\Vendor\UserWrapper;

use Sway\Distribution\Extension\PackageExtension;
use Sway\Distribution\Container\ContainerBuilder;
use Sway\Distribution\Container\Repository;

class InitExtension extends PackageExtension
{
    public function loadConfig(ContainerBuilder $container) 
    {
        $repository = $container->loadFrom(__DIR__ . '/Resources');
        
        $repository->load('services.yml');
    }
    
}


?>
