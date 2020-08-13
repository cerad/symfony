First attempt at creating a package for my Symfony tweaks

```json
{
  "require": {
    "cerad/symfony": "dev-master"
  },
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cerad/symfony"
    }
  ]
}
```

Not sure if I need the min-stability or not

Developing against 7.4 to get typed properties.

7.2 does not support them.
