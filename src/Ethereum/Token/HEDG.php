<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * HedgeTrade Token
 *
 * @see https://etherscan.io/token/0xf1290473e210b2108a85237fbcd7b6eb42cc654f
 */
class HEDG extends Contract {
    public const ADDRESS = '0xf1290473e210b2108a85237fbcd7b6eb42cc654f';
    public const DECIMALS = 18;
}