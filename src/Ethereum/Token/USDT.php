<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Tether USD
 *
 * @see https://etherscan.io/token/0xdac17f958d2ee523a2206206994597c13d831ec7
 */
class USDT extends Contract {
    public const ADDRESS = '0xdac17f958d2ee523a2206206994597c13d831ec7';
    public const DECIMALS = 6;
}