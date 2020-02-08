<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * USD Coin
 *
 * @see https://etherscan.io/token/0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48
 */
class USDC extends Contract {
    public const ADDRESS = '0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48';
    public const DECIMALS = 6;
}