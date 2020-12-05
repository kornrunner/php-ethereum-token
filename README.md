# php-ethereum-token [![Build Status](https://travis-ci.org/kornrunner/php-ethereum-uttokenil.svg?branch=master)](https://travis-ci.org/kornrunner/php-ethereum-token) [![Build status](https://ci.appveyor.com/api/projects/status/d1qm90h668elbtc4/branch/master?svg=true)](https://ci.appveyor.com/project/kornrunner/php-ethereum-token/branch/master) [![Coverage Status](https://coveralls.io/repos/github/kornrunner/php-ethereum-token/badge.svg?branch=master)](https://coveralls.io/github/kornrunner/php-ethereum-token?branch=master) [![Latest Stable Version](https://poser.pugx.org/kornrunner/ethereum-token/v/stable)](https://packagist.org/packages/kornrunner/ethereum-token)

PHP Ethereum Token Utils

## Installation

```sh
$ composer require kornrunner/ethereum-token
```

## Usage

To prepare a offline transaction, using `kornrunner/ethereum-offline-raw-tx`

```php
use kornrunner\Ethereum\Token;
use kornrunner\Ethereum\Transaction;

$nonce    = '04';
$gasPrice = '03f5476a00';
$gasLimit = '027f4b';
$to       = '1a8c8adfbe1c59e8b58cc0d515f07b7225f51c72';

$privateKey = 'b2f2698dd7343fa5afc96626dee139cb92e58e5d04e855f4c712727bf198e898';

$token = new Token;
$usdt  = new Token\USDT;

$amount = 20;
$hexAmount = $token->hexAmount($usdt, $amount);
// 0x1312d00

$data = $token->getTransferData($to, $hexAmount);
// 0xa9059cbb0000000000000000000000001a8c8adfbe1c59e8b58cc0d515f07b7225f51c720000000000000000000000000000000000000000000000000000000001312d00

$transaction = new Transaction($nonce, $gasPrice, $gasLimit, $usdt::ADDRESS, '', $data);
$transaction->getRaw($privateKey);
// f8a9048503f5476a0083027f4b94dac17f958d2ee523a2206206994597c13d831ec7b844a9059cbb0000000000000000000000001a8c8adfbe1c59e8b58cc0d515f07b7225f51c720000000000000000000000000000000000000000000000000000000001312d00801ba03e141ea4233ec00bb3a80d7fea5f774b736772851b7bad18453d0f3c6097c42e9fa6eb47b6bead6a76d7db12809e2c916df999d7b99b613fcaa135abd8a0078e
```

## Crypto

[![Ethereum](https://user-images.githubusercontent.com/725986/61891022-0d0c7f00-af09-11e9-829f-096c039bbbfa.png) 0x9c7b7a00972121fb843af7af74526d7eb585b171][Ethereum]

[Ethereum]: https://etherscan.io/address/0x9c7b7a00972121fb843af7af74526d7eb585b171 "Donate with Ethereum"
