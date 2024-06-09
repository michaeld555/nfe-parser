## DANFE File Generator

## Installation

Run this composer command in your application:

    composer require michaeld555/nfe-parser
  
## Using

You can create a Danfe instance and pass the xml file path and output danfe file path. This will generate your document and save in your passed path.

```php
    use Michaeld555\Danfe;

    Danfe::simple('path_to_file/nfe.xml', 'path_to_file/danfe.pdf');

    if (file_exists('path_to_file/danfe.pdf')) {

        echo "the file was generated successfully";

    } else {

        echo "an error occurred during the file generation";

    }

```

If you want to add your logo to the document, you can use the custom method passing the logo path.

```php

    Danfe::custom('path_to_file/nfe.xml', 'path_to_file/danfe.pdf', 'path_to_logo/logo.png');

```

## Notes:

- If you are using a linux system, make sure you have python3 and the package [brazilfiscalreport](https://github.com/Engenere/BrazilFiscalReport/tree/main) installed on your system, and that your application is enabled to execute customs python scripts