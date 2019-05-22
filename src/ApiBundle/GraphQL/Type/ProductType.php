<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2019. 05. 22.
 * Time: 16:02
 */

namespace ApiBundle\GraphQL\Type;

use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;

class ProductType extends AbstractObjectType
{
    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            'id'        => new NonNullType(new IdType()),
            'sku'     => new StringType(),
            'stock' => new IntType()
        ]);
    }
}