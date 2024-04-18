<?php

use Tests\TestCase;
use App\Http\Controllers\Client\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class InsertPaymentTest extends TestCase
{
    public function testInsertPayment()
    {
        $data = [
            'address_detail' => '123 Street, City',
            'payment_method' => 'Cash',
            'total_pay' => 100,
        ];

        $cookieValue = json_encode(['id' => 1]);

        DB::shouldReceive('table->where->exists')->andReturn(false);
        DB::shouldReceive('table->insert')->once();

        // kiểm tra xem hàm có redirect về route 'order-success' không
        $response = $this->call('POST', '/order-success', $data, ['user_info' => $cookieValue]);
        $this->assertInstanceOf(RedirectResponse::class, $response);
    }

    public function testInsertPaymentWithInvalidCookie()
    {
        $request = new Request([
            'address_detail' => '123 Street, City',
            'payment_method' => 'Cash',
            'total_pay' => 100,
        ]);
        $controller = new PaymentController();
        $this->expectException(InvalidArgumentException::class);
        $controller->insertPayment($request);
    }

    public function testInsertPaymentWithInvalidCookieFormat()
    {
        $request = new Request([
            'address_detail' => '123 Street, City',
            'payment_method' => 'Cash',
            'total_pay' => 100,
        ]);

        $this->withCookie('user_info', 'invalid_json_format');
        $controller = new PaymentController();
        $this->expectException(InvalidArgumentException::class);
        $controller->insertPayment($request);
    }
}
