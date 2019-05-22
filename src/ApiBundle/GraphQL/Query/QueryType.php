<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2019. 05. 22.
 * Time: 16:04
 */

namespace ApiBundle\GraphQL\Query;

use ApiBundle\GraphQL\Query\Product\ProductsFields;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class QueryType extends AbstractObjectType
{
    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            new ProductsFields()
        ]);
    }
}