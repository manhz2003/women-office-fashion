<?php

use Tests\TestCase;
use App\Http\Controllers\Client\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertPaymentTest extends TestCase
{
    public function testInsertPayment()
    {
        // Arrange
        $request = new Request([
            'address_detail' => '123 ABC Street',
            'payment_method' => 'Credit Card',
            'total_pay' => 100.00,
        ]);

        $expectedId = 'TEST_ID';
        $expectedUserAddress = '123 ABC Street';
        $expectedMethodPay = 'Credit Card';
        $expectedTotal = 100.00;
        $expectedUserId = 1;

        $mockTable = \Mockery::mock();
        DB::shouldReceive('table')->once()->with('payments')->andReturn($mockTable);
        $mockTable->shouldReceive('where')->once()->with('id', $expectedId)->andReturnSelf();
        $mockTable->shouldReceive('exists')->once()->andReturn(false);
        $mockTable->shouldReceive('insert')->once()->with([
            'id' => $expectedId,
            'user_address' => $expectedUserAddress,
            'method_pay' => $expectedMethodPay,
            'total' => $expectedTotal,
            'user_id' => $expectedUserId,
            'created_at' => \Mockery::type('string'),
            'updated_at' => \Mockery::type('string'),
        ]);

        $request->cookies->add(['user_info' => '{"id":1}']);

        // Act
        $paymentController = new PaymentController();
        $response = $paymentController->insertPayment($request);

        // Assert
        $this->assertInstanceOf(\Illuminate\Http\RedirectResponse::class, $response);
        $this->assertEquals(route('order-success'), $response->getTargetUrl());
    }
}
