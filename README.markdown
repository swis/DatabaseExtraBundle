SwisDatabaseExtraBundle
===

To enable this bundle, just include it to your composer.json:



```
    "require": {
        ...
        "swis/database-extra-bundle": "dev-master",
        ...
    }
```

enable it in your `AppKernel.php`

```
    $bundles = array(
        ...
        new Swis\Bundle\DatabaseExtraBundle\DnDatabaseExtraBundle(),
        ...
    );
```

and use the SQLite driver in your environment:

```
doctrine:
    dbal:
        connections:
            default:
                driver_class:                 \Swis\Bundle\DatabaseExtraBundle\Driver\Sqlite
```
