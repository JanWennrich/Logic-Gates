# Logic Gates

A tiny PHP library for building and simulating digital circuits from simple logic gates (e.g., `AND`, `OR`, `NOT`, `XOR`) and composing them into larger combinational networks.

---

## ✨ Features

* All common boolean gates: 
    * `AND` & `NAND`
    * `OR` & `NOR`
    * `XOR` & `XNOR`
    * `NOT` & `BUFFER`
    * `IMPLY` & `NIMPLY`
    * `TRUE` & `FALSE`
* Compose gates into circuits by wiring outputs to inputs
* Zero dependencies
* Unit tested

---

## 📦 Installation

This project is a standard Composer library.

```bash
composer require jan-wennrich/logic-gates
```
---

## 🚀 Example

The example shows how the `AND` gate works:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use JanW\LogicGates\AndGate;
use JanW\LogicGates\BinaryFalseGate;
use JanW\LogicGates\BinaryTrueGate;

$falseInput = new BinaryFalseGate();
$trueInput = new BinaryTrueGate();

(new AndGate($falseInput, $falseInput))->getOutput()); // returns "false"
(new AndGate($falseInput, $trueInput))->getOutput()); // returns "false"
(new AndGate($trueInput, $falseInput))->getOutput()); // returns "false"
(new AndGate($trueInput, $trueInput))->getOutput()); // returns "true"

```
---

## 🧪 Testing

This library is thoroughly tested in multiple ways:
- Unit tests via `PHPUnit`
- Static analysis via `PHPStan`
- `PSR-12` code style via `PHP_CodeSniffer`
- Dependency validity via `Composer Dependency Analyser`
- `composer.json` schema via `composer validate`

The tests can be executed after cloning this repository and installing all dev-dependencies:
```bash
git clone git@github.com:JanWennrich/Logic-Gates.git
composer install
```

All tests can be run via the Composer `test` script:

```bash
composer test
```

Specific tests can be run via their corresponding binaries in `vendor/bin/`.  
To run PHPUnit for example use this command:

```bash
vendor/bin/phpunit
```

---

## 📄 License

GPL-3.0 - see [`LICENSE`](./LICENSE)
