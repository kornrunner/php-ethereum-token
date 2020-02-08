<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Crypto.com Coin
 *
 * @see https://etherscan.io/token/0xa0b73e1ff0b80914ab6fe0444e65848c4c34450b
 */
class CRO extends Contract{
    public const ADDRESS = '0xa0b73e1ff0b80914ab6fe0444e65848c4c34450b';
    public const DECIMALS = 8;
}