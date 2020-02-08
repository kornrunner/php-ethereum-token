<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Paxos Standard Token
 *
 * @see https://etherscan.io/token/0x8e870d67f660d95d5be530380d0ec0bd388289e1
 */
class PAX extends Contract {
    public const ADDRESS = '0x8e870d67f660d95d5be530380d0ec0bd388289e1';
    public const DECIMALS = 18;
}