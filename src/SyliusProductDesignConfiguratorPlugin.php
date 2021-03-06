<?php

declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusProductDesignConfiguratorPlugin extends Bundle
{
    use SyliusPluginTrait;
}

