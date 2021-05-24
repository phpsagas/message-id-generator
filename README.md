# Saga Message ID Generator

## Table Of Contents
- [Requirements](#requirements)
- [About package](#about-package)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Requirements  
- php: >= 7.1
- [phpsagas/common](https://github.com/phpsagas/common)
- ramsey/uuid: ^4.1

## About package
This component is the part of [phpsagas framework](https://github.com/phpsagas).  
The package contains implementation of saga message id generator based on [ramsey/uuid](https://packagist.org/packages/ramsey/uuid).

## Installation
You can install the package using [Composer](https://getcomposer.org/):
```bash
composer require phpsagas/message-id-generator
```

## Usage
You can use `UuidBasedMessageIdGenerator` as `MessageIdGeneratorInterface` implementation.

## License
Saga message id generator is released under the [MIT license](LICENSE). 
