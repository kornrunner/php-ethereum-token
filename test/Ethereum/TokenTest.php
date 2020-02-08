<?php declare(strict_types=1);

namespace kornrunner\Ethereum;

use PHPUnit\Framework\TestCase;
use RuntimeException;

class TokenTest extends TestCase {

    public function testHexAmount(): void {
        $token = new Token;
        $this->assertSame('0x0', $token->hexAmount(new Token\AE, 0));
        $this->assertSame('0xde0b6b3a7640000', $token->hexAmount(new Token\AE, 1));
        $this->assertSame('0xbb8', $token->hexAmount(new Token\USDT, 0.003));
    }

    public function testTransferInvalidAddress(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getTransferData('test', '');
    }

    public function testTransferInvalidAddressLength(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid address provided');
        $token = new Token;
        $token->getTransferData('aa', '');
    }

    public function testTransferInvalidAmount(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '');
    }

    public function testGetTransferData(): void {
        $token = new Token;
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getTransferData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getTransferData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '0xac'));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000de0b6b3a7640000',
            $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\AE, 1)));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000000000000000bb8',
            $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 0.003)));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000004c4b40',
            $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 5)));
        $this->assertSame('0xa9059cbb000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b5000000000000000000000000000000000000000000000000000aa87bee538000',
            $token->getTransferData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\NEXO, 0.003)));
    }

}