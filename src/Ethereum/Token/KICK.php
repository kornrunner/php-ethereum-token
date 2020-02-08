<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * KickToken
 *
 * @see https://etherscan.io/token/0xc12d1c73ee7dc3615ba4e37e4abfdbddfa38907e
 */
class KICK extends Contract {
    public const ADDRESS = '0xc12d1c73ee7dc3615ba4e37e4abfdbddfa38907e';
    public const DECIMALS = 8;
}