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

3) Use the SQLite driver in your environment:

```
doctrine:
    dbal:
        connections:
            default:
                driver_class:                 \Swis\Bundle\DatabaseExtraBundle\Driver\Sqlite
```
