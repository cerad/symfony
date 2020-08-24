First attempt at creating a package for my Symfony tweaks

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        },
        "exclude-from-classmap": [
            "/vendor/cerad/symfony/src/App/"
        ]
    }
}
```

Not sure if I need the min-stability or not

Developing against 7.4 to get typed properties.

7.2 does not support them.

Add config/mappings/default directory
copy config/packages/doctrine.yaml
remove Entity and Repository directories

copy config/services.php
remove Controller directory

copy config/routes/annotations.yaml until annotations are disabled
     or just remove the file
     
copy config/routes.php

copy App\Home

After adding some additional PSR-4 paths I had to publish a new release and then update the app.
