<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Synthetix Network Token
 *
 * @see https://etherscan.io/token/0xc011a72400e58ecd99ee497cf89e3775d4bd732f
 */
class SNX extends Contract {
    public const ADDRESS = '0xc011a72400e58ecd99ee497cf89e3775d4bd732f';
    public const DECIMALS = 18;
}