<?php
/**
 * This class was automatically generated by GraphQL Schema generator
 */

namespace ApiBundle\GraphQL;

use ApiBundle\GraphQL\Query\QueryType;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Type\Scalar\StringType;

class Schema extends AbstractSchema
{
    public function build(SchemaConfig $config)
    {
        $config
            ->setQuery(new QueryType());
    }

}

