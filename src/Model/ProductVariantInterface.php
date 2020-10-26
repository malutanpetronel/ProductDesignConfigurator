<?php
declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\Model;

use Sylius\Component\Core\Model\ProductVariantInterface as BaseProductVariantInterface;

interface ProductVariantInterface extends BaseProductVariantInterface
{
    public function setSpatialModel(bool $spatialModel): void;

    public function hasSpatialModel(): ?bool;
}
