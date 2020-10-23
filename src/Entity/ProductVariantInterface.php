<?php
declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\Entity;

interface ProductVariantInterface
{
    public function setSpatialModel(bool $spatialModel): void;

    public function hasSpatialModel(): ?bool;
}
