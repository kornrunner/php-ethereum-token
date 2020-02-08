<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * DxChain Token
 *
 * @see https://etherscan.io/token/0x973e52691176d36453868d9d86572788d27041a9
 */
class DX extends Contract {
    public const ADDRESS = '0x973e52691176d36453868d9d86572788d27041a9';
    public const DECIMALS = 18;
}