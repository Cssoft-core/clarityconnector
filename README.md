# CSSoft_Clarityconnector

## Overview

The `CSSoft_Clarityconnector` module integrates Microsoft Clarity with your Magento 2 store. It provides a simple configuration interface to store your Microsoft Clarity token and automatically injects the Clarity tracking script into the header of your website.

## Features

- **Configuration Management:** Securely store the Microsoft Clarity token.
- **Script Injection:** Automatically inject the Clarity tracking script into your website’s header.
- **User-Friendly:** Easy configuration via Magento’s admin panel.


## Installation

### Using Composer

1. **Add the repository to your composer.json**:
    ```bash
    composer require vendor/module-name
    ```

2. **Run the setup upgrade command**:
    ```bash
    php bin/magento setup:upgrade
    ```

3. **Deploy static content**:
    ```bash
    php bin/magento setup:static-content:deploy
    ```

4. **Clear the cache**:
    ```bash
    php bin/magento cache:clean
    ```

### Manual Installation

1. **Download the extension package** and unzip it.
2. **Upload the extension files** to the `app/code/Vendor/ModuleName` directory.
3. **Run the setup upgrade command**:
    ```bash
    php bin/magento setup:upgrade
    ```

4. **Deploy static content**:
    ```bash
    php bin/magento setup:static-content:deploy
    ```

5. **Clear the cache**:
    ```bash
php bin/magento cache:clean
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy