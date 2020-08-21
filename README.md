# PHP Simple Regex Zim
A simple validation php class with common regex patterns for Zimbabwe

## How to install 
composer require mashcom/validation

## Usage

`use Mashcom\Zimbabwean\Validation;`

`Validation::method(string $input,bool $is_required)`

### Example

Example Validate::econet("0774875643")

Please Note** A validation method have a default parameter $is_required=TRUE, if input is optional use FALSE for example `Validate::econet("0774875643",FALSE)` this ensures that if the input is validated only if its not empty.

## Available Methods

`Validate::econet($input)` Validates Econet Mobile Number

`Validate::telecel($input)` Validates Telecel Mobile Number

`Validate::netone($input)` Validates Netone Movile Number

`Validate::nationalIdNumber($input)` Validates National ID Number

`Validate::numberPlate($input)` Validates Zimbabwean National Vehicle Registration Numbers

`Validate::driversLicence($input)` Validates Zimbabwean Driver's Licences

`Validate::passportNumber($input)` Validates Zimbabwean Passport Numbers

`Validate::socialSecurityNumber($input)` Validates Zimbabwean Social Security Number (NSSA)

`Validate::domainName($input)` Validates Zimbabwean Domain Name



