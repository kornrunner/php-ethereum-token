<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Kucoin Shares
 *
 * @see https://etherscan.io/token/0x039b5649a59967e3e936d7471f9c3700100ee1ab
 */
class BAT extends Contract {
    public const ADDRESS = '0x039b5649a59967e3e936d7471f9c3700100ee1ab';
    public const DECIMALS = 6;
}