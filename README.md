# yii2-cookieconsent
Implementation of Cookie Consent v3 cookie usage warner as Yii2 widget

Thanks to [insites](https://cookieconsent.insites.com/)

## Installation
### Composer
````bash
composer require easyrider7522/yii2-cookieconsent "@alpha"
````

or manually add to the `required` section of your project's `composer.json`
````json
"easyrider7522/yii2-cookieconsent": "@alpha"
````
and run `composer update` shell command

Since it's a pre-release (currently in alpha state) stability flag `@alpha` must be used with the package (as you can see above) in order to be able to install it without changing `minimum-stability` property of the `composer.json`, which is global for your whole project.

## Usage

As any Yii2 widget, in desired view or layout file as follows:
````php
<?php
use easyrider7522\cookieconsent\CookieConsent;

CookieConsent::widget([
    'lang'      => 'en',
    'options'   => [
        'palette'   => [
            'popup'     => [
                'background'    => '#222',
                'text'          => '#fff',
            ],
            'button'    => [
                'background'    => '#459f45',
                'text'          => '#fff',
            ],
        ],
        'theme'     => 'classic',
        'position'  => 'top',
        'type'      => 'opt-in',
        'content'   => [
            'message'   => 'This website uses cookies to ensure you get the best experience on our website.',
            'dismiss'   => 'Got it!',
            'link'      => 'Learn more',
            'href'      => 'http://cookiesandyou.com/',
        ],
    ],
]);
````
Customization can be easily done on [the plugin developer's site](https://cookieconsent.insites.com/download/) and manually translated to PHP `array`.

![Plugin settings object within JS](https://raw.githubusercontent.com/easyrider7522/yii2-cookieconsent/master/copying-js-object.jpg)

Property `optionJs` was introduced for compatibility with native JS so, the chosen settings can be directly copied from the interactive configurator to it as string, containing the JavaScript object data (`options` property is ignored if `optionsJs` evaluates to `true`):

````php
CookieConsent::widget([
    'optionsJs' => '{
        "palette": {
            "popup": {
                "background": "#000"
            },
            "button": {
                "background": "#f1d600"
            }
        },
        "position": "top"
    }',
]);
````

## Removal
````bash
composer remove easyrider7522/yii2-cookieconsent
````

or manually delete it from the `required` section of your project's `composer.json` and run `composer update`

## Dependencies

[Cookie Consent](https://github.com/insites/cookieconsent)

## Screenshots
###### Sample 1. Widget is overlapping Yii's default main menu ot the top of the page.
![Cookie Consent Yii2 widget sample 1](https://raw.githubusercontent.com/easyrider7522/yii2-cookieconsent/master/sample1.jpg)


###### Sample 2. Widget is at the bottom of the page.
![Cookie Consent Yii2 widget sample 2](https://raw.githubusercontent.com/easyrider7522/yii2-cookieconsent/master/sample2.jpg)


###### Sample 3. Widget is a box at page's bottom-right corner.
![Cookie Consent Yii2 widget sample 3](https://raw.githubusercontent.com/easyrider7522/yii2-cookieconsent/master/sample3.jpg)
