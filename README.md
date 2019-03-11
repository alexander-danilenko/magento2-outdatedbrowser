![](https://i.imgur.com/KPwKk5t.png)

# Magento2 Outdated browser module

Magento2 module that prevents site for being viewed in Internet Explorer and suggests to update browser using [outdatedbrowser.com](http://outdatedbrowser.com) service.

## Prerequisites
No prerequisites required except Magento2 installation.

## Installation

1. Require composer package
    ```
    composer require alexander-danilenko/magento2-outdatedbrowser
    ```
2. Enable `FFWAgency_OutdatedBrowser` magento2 extension
    ```
    php bin/magento module:enable --clear-static-content FFWAgency_OutdatedBrowser
    ```
3. Enjoy IE-less users!

--- 

## How It Works

It just prints additional block in content area that is hidden by default and will be shown only for IE users and overlaps whole page. 

## How to adjust
Follow [Magento2 documentation](https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/themes/theme-inherit.html) and override files that module provides. 

_Please note: `pub/static/*` content **should be removed** before executing `setup:static-content:deploy` command for proper handling of CSS/JS overriding._

--- 
## Authors

* **Alexander Danilenko** - *Initial work* - [alexander-danilenko](https://github.com/alexander-danilenko)

See also the list of [contributors](https://github.com/alexander-danilenko/magento2-outdatedbrowser/contributors) who participated in this project.

## Acknowledgments

* [FFWAgency](https://ffwagency.com/) for sponsorship.
* [Dobromir Hristakiev](https://github.com/vflirt).
* [outdatedbrowser.com](http://outdatedbrowser.com) for an awesome service.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
