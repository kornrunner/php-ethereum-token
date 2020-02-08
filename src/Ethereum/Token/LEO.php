<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Bitfinex LEO Token
 *
 * @see https://etherscan.io/token/0x2af5d2ad76741191d15dfe7bf6ac92d4bd912ca3
 */
class LINK extends Contract {
    public const ADDRESS = '0x2af5d2ad76741191d15dfe7bf6ac92d4bd912ca3';
    public const DECIMALS = 18;
}