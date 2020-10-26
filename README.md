## Sylius Product Design Configurator

---
### INSTALATION
To correctly install the plugin please follow the next steps

---
#### Install the plugin
dev phase
<pre>
,
    "repositories": [
        {
            "type": "path",
            "url": "../SyliusProductDesignConfiguratorPlugin"
        }
    ]
</pre>
then
<pre>
composer require petro/sylius-product-design-configurator-plugin:*@dev
</pre>

---
#### Fix Sylius related errors
<p>
You may get in 1.8 a strange error Attempted to load class "SecurityCheckerCommand" from 
namespace in bin/console can be fixed with probably from outside docker as inside will 
throw allowed memory:
</p>
<pre>composer require sensiolabs/security-checker</pre>

then fix missing directory
<pre>mkdir /srv/sylius/public/media/image</pre>

---
#### Enable the plugin in the bundles.php by adding at the end
<pre>
...
Petro\ProductDesignConfigurator\SyliusProductDesignConfiguratorPlugin::class => ['all' => true],
</pre>
    
#### Enable plugin routes
Add the following routes into your project routes.yml
<pre>
sylius-product-design-configurator-plugin:
    # loads routes from the SyliusProductDesignConfigurator Plugin
    resource: '@SyliusProductDesignConfiguratorPlugin/Resources/config/shop_routing.yml'
</pre>

---
#### Enable and run plugin migrations
Add into your project config/doctrine_migrations.yaml:
<pre>
doctrine_migrations:
    ...
    migrations_paths:
        'App\Migrations': "%kernel.project_dir%/src/Migrations"
</pre>
and run the plugin migrations. You can use:
<pre>
bin/console doctrine:migrations:migrate
</pre>

---
##### Copy view files
<pre>
    Please cppy the folders and files under to_copy into your project Resources.
</pre>

---
done...

---

##### Get the service names
bin/console debug:container | grep state_machine | grep -vE 'Transition|Definition' | awk '{ print $1 }'
### Refresh js and css
bin/console assets:install web --ansi
###
bin/console debug:container sylius.repository.product

