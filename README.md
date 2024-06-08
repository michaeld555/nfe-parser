## PDF Nfe Danfe Creator for PHP

## Installation

### PHP Projects
Require this package in your composer.json and update composer. This will download the package.

    composer require michaeld555/nfe-parser
  
## Using

You can create a new Converter instance and pass the input xml and output file paths. This will save the output file in the path passed.

```php
    use Michaeld555\Danfe;

    Danfe::simple('path_to_file/nfe.xml', 'path_to_file/danfe.pdf');

    // For custom logo in the fiscal file

    Danfe::custom('path_to_file/nfe.xml', 'path_to_file/danfe.pdf', 'path_to_logo/logo.png');

    if (file_exists('path_to_file/danfe.pdf')) {

        echo "the file was generated successfully";

    } else {

        echo "an error occurred during the file generation";

    }

```