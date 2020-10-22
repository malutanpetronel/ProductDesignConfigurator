<?php
declare(strict_types=1);

namespace App\Petro\ProductDesignConfigurator\Entity;

interface ProductVariantInterface
{
    public function setSpatialModel(bool $spatialModel): void;

    public function hasSpatialModel(): ?bool;
}
