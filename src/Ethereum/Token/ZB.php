<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * ZBToken
 *
 * @see https://etherscan.io/token/0xbd0793332e9fb844a52a205a233ef27a5b34b927
 */
class ZB extends Contract {
    public const ADDRESS = '0xbd0793332e9fb844a52a205a233ef27a5b34b927';
    public const DECIMALS = 18;
}