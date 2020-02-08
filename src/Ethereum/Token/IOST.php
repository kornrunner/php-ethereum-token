<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * IOSToken
 *
 * @see https://etherscan.io/token/0xfa1a856cfa3409cfa145fa4e20eb270df3eb21ab
 */
class IOST extends Contract {
    public const ADDRESS = '0xfa1a856cfa3409cfa145fa4e20eb270df3eb21ab';
    public const DECIMALS = 18;
}