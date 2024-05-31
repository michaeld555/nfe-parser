## PDF Nfe Danfe Creator for PHP

## Installation

### PHP Projects
Require this package in your composer.json and update composer. This will download the package.

    composer require michaeld555/nfe-parser
  
## Using

You can create a new Converter instance and pass the input xml and output file paths. This will save the output file in the path passed.

```php
    use Michaeld555\SecureShell\Danfe;

    Danfe::create('path_to_file/nfe.xml', 'path_to_file/danfe.pdf');
```