<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * ChainLink Token
 *
 * @see https://etherscan.io/token/0x514910771af9ca656af840dff83e8264ecf986ca
 */
class LINK extends Contract {
    public const ADDRESS = '0x514910771af9ca656af840dff83e8264ecf986ca';
    public const DECIMALS = 18;
}