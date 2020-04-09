## About Laravel Starter
Laravel Starter is a Laravel installation with a few utilities already installed and configured, and minor changes
from the _vanilla_ installation. It is meant to speed up the setup of a new Laravel installation.

## Installation
1. Clone this repository in your project directory
```git
git clone git@github.com:LucaPuddu/laravel-starter.git .
```
2. Delete the `.git` folder.

## Features
#### Installed Packages
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 
- [PHP Coding Standards Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- [PHPUnit Coverage Check](https://github.com/richardregeer/phpunit-coverage-check)
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

#### Changes
- All models reside in the `app\Models` directory
- All models inherit from a `BaseModel` class
- The `QueryBuilder` and `Model` static methods can be used without warnings from the IDE
- The `User` model inherit from an `Authenticatable` class
