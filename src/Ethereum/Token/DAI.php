<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Dai Stablecoin
 *
 * @see https://etherscan.io/token/0x6b175474e89094c44da98b954eedeac495271d0f
 */
class DAI extends Contract {
    public const ADDRESS = '0x6b175474e89094c44da98b954eedeac495271d0f';
    public const DECIMALS = 18;
}