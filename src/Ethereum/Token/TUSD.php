<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * TrueUSD
 *
 * @see https://etherscan.io/token/0x0000000000085d4780B73119b644AE5ecd22b376
 */
class TUSD extends Contract {
    public const ADDRESS = '0x0000000000085d4780B73119b644AE5ecd22b376';
    public const DECIMALS = 18;
}