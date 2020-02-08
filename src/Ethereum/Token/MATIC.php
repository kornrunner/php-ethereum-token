<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Matic Token
 *
 * @see https://etherscan.io/token/0x7d1afa7b718fb893db30a3abc0cfc608aacfebb0
 */
class MATIC extends Contract {
    public const ADDRESS = '0x7d1afa7b718fb893db30a3abc0cfc608aacfebb0';
    public const DECIMALS = 18;
}