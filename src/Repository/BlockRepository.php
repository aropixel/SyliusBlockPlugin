<?php


namespace Aropixel\SyliusBlockPlugin\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class BlockRepository extends ServiceEntityRepository implements BlockRepositoryInterface
{

    public function __construct(
        ManagerRegistry $registry,
        string $blockEntityClass)
    {
        parent::__construct($registry, $blockEntityClass);
    }

}
