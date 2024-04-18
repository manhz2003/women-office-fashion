<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\Client\CartController;
use InvalidArgumentException;

class DeleteCartItemTest extends TestCase
{
    // kiểm tra trường hợp khi mục trong giỏ hàng
    public function testDeleteCartItemWhenExists()
    {
        $cartItemId = '1';

        $mockDB = \Mockery::mock('alias:DB');
        $mockDB->shouldReceive('table')->once()->with('cart_items')->andReturn($mockDB);
        $mockDB->shouldReceive('where')->once()->with('id', $cartItemId)->andReturn($mockDB);
        $mockDB->shouldReceive('exists')->once()->andReturn(true);
        $mockDB->shouldReceive('delete')->once();

        $response = $this->json('DELETE', "/cart/{$cartItemId}");
        $response->assertStatus(302);
    }

    public function testDeleteCartItemWhenNotExists()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('CartItem with id 1 does not exist.');

        $mockDB = \Mockery::mock('alias:DB');
        $mockDB->shouldReceive('table')->once()->with('cart_items')->andReturn($mockDB);
        $mockDB->shouldReceive('where')->once()->with('id', '1')->andReturn($mockDB);
        $mockDB->shouldReceive('exists')->once()->andReturn(false);

        $cartController = new CartController();
        $cartController->deleteCartItem('1');
    }
    public function testDeleteCartItemWhenIdIsNotString()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('CartItem id must be a non-empty string.');

        $cartController = new CartController();
        $cartController->deleteCartItem(1);
    }

    public function testDeleteCartItemWhenIdIsEmptyString()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('CartItem id must be a non-empty string.');

        $cartController = new CartController();
        $cartController->deleteCartItem('');
    }
}
