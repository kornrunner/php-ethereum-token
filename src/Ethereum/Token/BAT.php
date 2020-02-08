<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Basic Attention Token
 *
 * @see https://etherscan.io/token/0x0d8775f648430679a709e98d2b0cb6250d2887ef
 */
class BAT extends Contract {
    public const ADDRESS = '0x0d8775f648430679a709e98d2b0cb6250d2887ef';
    public const DECIMALS = 18;
}