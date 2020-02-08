<?php declare(strict_types=1);

namespace kornrunner\Ethereum;

abstract class Contract {
    public const ADDRESS = '';
    public const DECIMALS = 0;

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * transfer(address,uint256)
     */
    public const SIGNATURE_TRANSFER = 'a9059cbb';
}