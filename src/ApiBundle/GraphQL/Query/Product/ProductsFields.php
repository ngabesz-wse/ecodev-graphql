<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2019. 05. 22.
 * Time: 16:05
 */

namespace ApiBundle\GraphQL\Query\Product;


use ApiBundle\GraphQL\Type\ProductType;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\AbstractType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class ProductsFields extends AbstractContainerAwareField
{
    public function resolve($value, array $args, ResolveInfo $info)
    {
        return $this->container->get('product.resolver')->findAll();
    }
    /**
     * @return AbstractObjectType|AbstractType
     */
    public function getType()
    {
        return new ListType(new ProductType());
    }
}
