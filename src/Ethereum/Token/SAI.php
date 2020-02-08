<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Sai Stablecoin v1.0
 *
 * @see https://etherscan.io/token/0x89d24a6b4ccb1b6faa2625fe562bdd9a23260359
 */
class SAI extends Contract {
    public const ADDRESS = '0x89d24a6b4ccb1b6faa2625fe562bdd9a23260359';
    public const DECIMALS = 18;
}