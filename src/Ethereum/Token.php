<?php declare(strict_types=1);

namespace kornrunner\Ethereum;

use RuntimeException;

class Token
{
    public function getTransferData(string $toAddress, string $hexAmount): string {
        return sprintf('0x%s%s%s',
            str_pad(Contract::SIGNATURE_TRANSFER, 32, '0', STR_PAD_RIGHT),
            str_pad($this->sanitizeAddress($toAddress), 32, '0', STR_PAD_LEFT),
            str_pad($this->sanitizeHex($hexAmount), 64, '0', STR_PAD_LEFT)
        );
    }

    public function hexAmount(Contract $token, float $amount): string {
        return '0x' . static::bcdechex(bcmul((string) $amount, bcpow('10', strval($token::DECIMALS), 0), 0));
    }

    private function sanitizeAddress(string $address): string {
        $address = $this->sanitizeHex($address);
        if (strlen($address) !== 40) {
            throw new RuntimeException('Invalid address provided');
        }

        return $address;
    }

    private function sanitizeHex(string $hex): string {
        if (stripos($hex, '0x') === 0) {
            $hex = substr($hex, 2);
        }

        $length = strlen($hex);
        if (($length == 0)
            || (trim($hex, '0..9A..Fa..f') !== '')) {
            throw new RuntimeException('Invalid hex provided');
        }

        return $hex;
    }

    private static function bcdechex(string $dec): string {
        $end = bcmod($dec, '16');
        $remainder = bcdiv(bcsub($dec, $end), '16');
        return $remainder == 0 ? dechex((int) $end) : static::bcdechex($remainder) . dechex((int) $end);
    }

}
