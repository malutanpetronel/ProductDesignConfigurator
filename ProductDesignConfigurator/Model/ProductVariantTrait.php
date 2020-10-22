<?php
declare(strict_types=1);

namespace App\Petro\ProductDesignConfigurator\Model;

trait ProductVariantTrait
{
    /**
     * @var bool
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
