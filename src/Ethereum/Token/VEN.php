<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * VeChain Token
 *
 * @see https://etherscan.io/token/0xd850942ef8811f2a866692a623011bde52a462c1
 */
class VEN extends Contract {
    public const ADDRESS = '0xd850942ef8811f2a866692a623011bde52a462c1';
    public const DECIMALS = 18;
}