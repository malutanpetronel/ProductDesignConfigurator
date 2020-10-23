<?php

declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\Controller;

use Sylius\Component\Product\Repository\ProductRepositoryInterface as ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ProductDesignController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * ProductDesignController constructor.
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function showAction(?int $id): Response
    {
        $product = $this->productRepository->find($id);

        return $this->render('@SyliusProductDesignConfiguratorPlugin/ProductDesign/show.html.twig', [
            'product' => $product,
            'greeting' => $this->getGreeting($id),
        ]);
    }

    private function getGreeting(?int $id): string
    {
        switch ($id) {
            case 1:
                return 'hello Coco!';
            case 2:
                return 'Hello, Bello?';
            default:
                return sprintf('Hello, %s!', $id);
        }
    }
}
