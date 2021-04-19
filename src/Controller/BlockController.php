<?php


namespace Aropixel\SyliusBlockPlugin\Controller;

use Aropixel\SyliusBlockPlugin\Repository\BlockRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlockController extends AbstractController
{
    /**
     * @var BlockRepositoryInterface
     */
    private $blockRepository;

    public function __construct(BlockRepositoryInterface $blockRepository)
    {
        $this->blockRepository = $blockRepository;
    }

    public function displayBlockByCode($code): Response
    {
        $block = $this->blockRepository->findOneBy([
            'code' => $code,
            'enabled' => true
        ]);

        return $this->render('@AropixelSyliusBlockPlugin/Front/Block/displayBlock.html.twig', [
            'block' => $block
        ]);
    }

}
