<?php declare(strict_types=1);

namespace kornrunner\Ethereum\Token;

use kornrunner\Ethereum\Contract;

/**
 * Maker Token
 *
 * @see https://etherscan.io/token/0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2
 */
class MKR extends Contract {
    public const ADDRESS = '0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2';
    public const DECIMALS = 18;
}