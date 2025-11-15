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

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * approve(address,uint256)
     */
    public const SIGNATURE_APPROVE = '095ea7b3';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * burn(uint256)
     */
    public const SIGNATURE_BURN = '42966c68';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * mint(address,uint256)
     */
    public const SIGNATURE_MINT = '40c10f19';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * transferFrom(address,address,uint256)
     */
    public const SIGNATURE_TRANSFER_FROM = '23b872dd';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * allowance(address,address)
     */
    public const SIGNATURE_ALLOWANCE = 'dd62ed3e';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * balanceOf(address)
     */
    public const SIGNATURE_BALANCE_OF = '70a08231';

    /*
     * First 4 bytes of Keccak hash of ASCII signature
     * totalSupply()
     */
    public const SIGNATURE_TOTAL_SUPPLY = '18160ddd';
}