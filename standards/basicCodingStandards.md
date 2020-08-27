# Basic Coding Standars

## Helize

this project is made with laravel so we'll use the conventions from [Spatie](https://guidelines.spatie.be/code-style/laravel-php#about-laravel). Then purpose of this document is to list the most important ones and some changes.

### 1. Files

PHP files must omit the `?>` closing tag.

PHP files must contain a maximum of 1 class.

PHP files that defines a class must be named after that class.

### 2. Classes, variables and methods

The classes must be named in `StudleyCaps`.

The header of PHP files must be organized in the following order

- Namespace declaration of the file.
- One or more class-based `use` import statements.
- One or more function-based `use` import statements.
- One or more constant-based use import statements.

Variables and methods should be name in `camelCase`.

Every method should be type-hinted if possible.

Everything that is not type-hinted should have a description as a DocBlock this includes variables.