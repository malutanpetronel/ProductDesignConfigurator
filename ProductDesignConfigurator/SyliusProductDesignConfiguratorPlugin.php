<?php

declare(strict_types=1);

namespace App\Petro\ProductDesignConfigurator;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusProductDesignConfiguratorPlugin extends Bundle
{
    use SyliusPluginTrait;
}

