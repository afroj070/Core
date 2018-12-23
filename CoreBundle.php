<?php 
namespace Firoj\SchoolManagement\Core;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Firoj\SchoolManagement\Core\DependencyInjection\CoreExtension;

class CoreBundle extends Bundle 
{
    public function getContainerExtension()
    {
        return new CoreExtension();
    }
}

?>