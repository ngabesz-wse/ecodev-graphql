<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2019. 05. 22.
 * Time: 16:08
 */

namespace ApiBundle\Resolver;


use Symfony\Bridge\Doctrine\ManagerRegistry;

use ApiBundle\Entity\Product as ProductEntity;

class Product
{

    protected $em;

    public function __construct(ManagerRegistry $em)
    {
        $this->em = $em;
    }

    public function findAll()
    {
        return $this->em->getRepository(ProductEntity::class)->findAll();
    }
}