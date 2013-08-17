# SwisDatabaseExtraBundle

This bundle provides additional features for databases in any Symfony 2 project.


## Core features

* Trigonometric and other additional functions for SQLite (ACOS, COS, RADIANS, SIN, SQRT, MOD, LOCATE)
* DQL definitions of trigonometric functions for their usage with Doctrine (ACOS, COS, RADIANS, SIN)


## Instructions

1) Include the bundle in your `composer.json`

```
    "require": {
        ...
        "swis/database-extra-bundle": "dev-master",
        ...
    }
```

2) Enable it in your `AppKernel.php`

```
    $bundles = array(
        ...
        new Swis\Bundle\DatabaseExtraBundle\SwisDatabaseExtraBundle(),
        ...
    );
```

3a) For enabling the SQLite driver, edit your `config.yml`:

```
doctrine:
    dbal:
        connections:
            default:
                driver_class:                 \Swis\Bundle\DatabaseExtraBundle\Driver\Sqlite
```

3b) For enabling the DQL functions, edit your `config.yml`:

```
doctrine:
    orm:
        entity_managers:
            default:
                dql:
                    numeric_functions:
                        acos:         Swis\Bundle\DatabaseExtraBundle\DQL\Acos
                        cos:          Swis\Bundle\DatabaseExtraBundle\DQL\Cos
                        radians:      Swis\Bundle\DatabaseExtraBundle\DQL\Radians
                        sin:          Swis\Bundle\DatabaseExtraBundle\DQL\Sin
```
