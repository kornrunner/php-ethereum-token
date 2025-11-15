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

    public function testApproveInvalidAddress(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getApproveData('test', '');
    }

    public function testApproveInvalidAddressLength(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid address provided');
        $token = new Token;
        $token->getApproveData('aa', '');
    }

    public function testApproveInvalidAmount(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '');
    }

    public function testGetApproveData(): void {
        $token = new Token;
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getApproveData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getApproveData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '0xac'));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000de0b6b3a7640000',
            $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\AE, 1)));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000000000000000bb8',
            $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 0.003)));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000000000005f5e100',
            $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 100)));
        $this->assertSame('0x095ea7b3000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b5ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
            $token->getApproveData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'));
    }

    public function testBurnInvalidAmount(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getBurnData('');
    }

    public function testGetBurnData(): void {
        $token = new Token;
        $this->assertSame('0x42966c6800000000000000000000000000000000000000000000000000000000000000ac',
            $token->getBurnData('ac'));
        $this->assertSame('0x42966c6800000000000000000000000000000000000000000000000000000000000000ac',
            $token->getBurnData('0xac'));
        $this->assertSame('0x42966c680000000000000000000000000000000000000000000000000de0b6b3a7640000',
            $token->getBurnData($token->hexAmount(new Token\AE, 1)));
        $this->assertSame('0x42966c6800000000000000000000000000000000000000000000000000000000004c4b40',
            $token->getBurnData($token->hexAmount(new Token\USDT, 5)));
        $this->assertSame('0x42966c6800000000000000000000000000000000000000000000000000000000000003e8',
            $token->getBurnData($token->hexAmount(new Token\USDT, 0.001)));
        $this->assertSame('0x42966c68000000000000000000000000000000000000000000000000000000e8d4a51000',
            $token->getBurnData($token->hexAmount(new Token\USDT, 1000000)));
    }

    public function testMintInvalidAddress(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getMintData('test', '');
    }

    public function testMintInvalidAddressLength(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid address provided');
        $token = new Token;
        $token->getMintData('aa', '');
    }

    public function testMintInvalidAmount(): void {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Invalid hex provided');
        $token = new Token;
        $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '');
    }

    public function testGetMintData(): void {
        $token = new Token;
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getMintData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', 'ac'));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b500000000000000000000000000000000000000000000000000000000000000ac',
            $token->getMintData('677a637ec8f0bb2c8d33c6ace08054e521bff4b5', '0xac'));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000de0b6b3a7640000',
            $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\AE, 1)));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b50000000000000000000000000000000000000000000000000000000000000bb8',
            $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 0.003)));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b5000000000000000000000000000000000000000000000000000000000ee6b280',
            $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\USDT, 250)));
        $this->assertSame('0x40c10f19000000000000000000000000677a637ec8f0bb2c8d33c6ace08054e521bff4b5000000000000000000000000000000000000000000000000000aa87bee538000',
            $token->getMintData('0x677a637ec8f0bb2c8d33c6ace08054e521bff4b5', $token->hexAmount(new Token\NEXO, 0.003)));
    }

    public function testRealEthereumApproveTransactions(): void {
        $token = new Token;
        $this->assertSame(
            '0x095ea7b3000000000000000000000000ec7d7bdb9296706f3b93178688ef89e4b81a8428ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
            $token->getApproveData('ec7d7bdb9296706f3b93178688ef89e4b81a8428', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff')
        );
        $this->assertSame(
            '0x095ea7b3000000000000000000000000c2d55ce14a8e04aef9b6bcfd105079b63c6a0ac8000000000000000000000000000000000000314dc6448d932ae0a456589c0000',
            $token->getApproveData('c2d55ce14a8e04aef9b6bcfd105079b63c6a0ac8', '000000000000000000000000000000000000314dc6448d932ae0a456589c0000')
        );
    }

    public function testRealEthereumBurnTransactions(): void {
        $token = new Token;
        $this->assertSame(
            '0x42966c680000000000000000000000000000000000000000000000000000000000002382',
            $token->getBurnData('2382')
        );
        $this->assertSame(
            '0x42966c680000000000000000000000000000000000000000000000000000000000001343',
            $token->getBurnData('1343')
        );
        $this->assertSame(
            '0x42966c6800000000000000000000000000000000000000000001d8a4f663152d03000000',
            $token->getBurnData('1d8a4f663152d03000000')
        );
    }

    public function testRealEthereumTransferTransactions(): void {
        $token = new Token;
        $this->assertSame(
            '0xa9059cbb000000000000000000000000d9040b8a1f12a40511ac1f7b994a21dd08ceac200000000000000000000000000000000000000000000000000000000424f6ccdf',
            $token->getTransferData('d9040b8a1f12a40511ac1f7b994a21dd08ceac20', '424f6ccdf')
        );
        $this->assertSame(
            '0xa9059cbb00000000000000000000000088a1493366d48225fc3cefbdae9ebb23e323ade30000000000000000000000000000000000000000000000000000000000000090',
            $token->getTransferData('88a1493366d48225fc3cefbdae9ebb23e323ade3', '90')
        );
        $this->assertSame(
            '0xa9059cbb0000000000000000000000009d6d61b5b466f870e809659b6c0efe0cc9b06ba40000000000000000000000000000000000000000000000000000008781e73c00',
            $token->getTransferData('9d6d61b5b466f870e809659b6c0efe0cc9b06ba4', '8781e73c00')
        );
    }

}