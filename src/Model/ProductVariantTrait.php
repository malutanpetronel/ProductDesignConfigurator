<?php
declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\Model;

use Doctrine\ORM\Mapping as ORM;

trait ProductVariantTrait
{
    /**
     * @var SpatialModel bool
     *
     * @ORM\Column(type="boolean", name="spatial_model")
     */
    private $spatialModel = false;

    public function setSpatialModel(bool $spatialModel): void
    {
        $this->spatialModel = $spatialModel;
    }

    public function hasSpatialModel(): ?bool
    {
        return $this->spatialModel;
    }
}
