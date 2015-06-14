# PushbulletBundle [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/stefanbraspenning/SBPushbulletBundle/tree/master/LICENSE.md)

[![Latest Version](https://img.shields.io/github/release/stefanbraspenning/pushbullet-bundle.svg?style=flat-square)](https://github.com/stefanbraspenning/pushbullet-bundle/releases)

# Installation

## Step 1) Get the bundle

 

    composer require stefanbraspenning/pushbullet-bundle


## Step 2) Register the bundle

To start using the bundle, register it in your Kernel.

``` php
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new SB\Bundle\PushbulletBundle\SBPushbulletBundle(),
        // ...
    );
}
```

## Step 3) Configure the default API token to use (optional)

If you don't have an API token yet, follow this link: [https://www.pushbullet.com/account](https://www.pushbullet.com/account).
It takes you to the Pushbullet site which (if you are logged in, then scroll down) lets you
generate an API token for your account.

The bundle tries to make sending payloads to Pushbullet a little easier by letting you
define the API token to use beforehand.

**NOTE:** Setting the token beforehand is not required; you can still choose to leave the
configuration empty and pass the API token of your choice when sending a payload: `$pb = new Pushbullet\Pushbullet('YOUR_ACCESS_TOKEN');`.

Here is an example:
```yaml
# app/config/config.yml
sb_pushbullet:
    api_token: 1234 # replace with your own (see: https://www.pushbullet.com/account)
```


## Documentation

Detailed documentation on how to access each API method can be found in the documentation of the package that this bundle integrates: [Pushbullet API library](https://github.com/ivkos/Pushbullet-for-PHP)
