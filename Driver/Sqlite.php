<?php

namespace Swis\Bundle\DatabaseExtraBundle\Driver;

class Sqlite extends \Doctrine\DBAL\Driver\PDOSqlite\Driver
{

    protected $_userDefinedFunctions = array(
        'sqrt' => array('callback' => array('Doctrine\DBAL\Platforms\SqlitePlatform', 'udfSqrt'), 'numArgs' => 1),
        'mod'  => array('callback' => array('Doctrine\DBAL\Platforms\SqlitePlatform', 'udfMod'), 'numArgs' => 2),
        'locate'  => array('callback' => array('Doctrine\DBAL\Platforms\SqlitePlatform', 'udfLocate'), 'numArgs' => -1),
        'acos'  => array('callback' => 'acos', 'numArgs' => 1),
        'cos'  => array('callback' => 'cos', 'numArgs' => 1),
        'radians'  => array('callback' => array('Swis\Bundle\DatabaseExtraBundle\Driver\Sqlite', 'radians'), 'numArgs' => -1),
        'sin'  => array('callback' => 'sin', 'numArgs' => 1),
    );

    public static function radians($arg)
    {
        return \deg2rad(\doubleval($arg));
    }
}
