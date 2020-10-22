## Product Design Configurator

##### To Copy files
<pre>
    Please cppy the folders and files under to_copy into above project Resources.
</pre>


##### Get the service names
bin/console debug:container | grep state_machine | grep -vE 'Transition|Definition' | awk '{ print $1 }'

#### use bundle as:
composer require petro/sylius-product-design-configurator-plugin --dev -o

### Refresh js and css
bin/console assets:install web --ansi

###
bin/console debug:container sylius.repository.product
