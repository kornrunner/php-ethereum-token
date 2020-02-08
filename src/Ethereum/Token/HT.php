<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * HuobiToken
 *
 * @see https://etherscan.io/token/0x6f259637dcd74c767781e37bc6133cd6a68aa161
 */
class HT extends Contract {
    public const ADDRESS = '0x6f259637dcd74c767781e37bc6133cd6a68aa161';
    public const DECIMALS = 18;
}