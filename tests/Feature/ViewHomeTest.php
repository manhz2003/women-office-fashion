<?php

use Illuminate\View\View;
use Tests\TestCase;
use App\Http\Controllers\Client\HomeController;

class ViewHomeTest extends TestCase
{
    public function testViewHome()
    {
        $homeController = new HomeController();
        $view = $homeController->viewHome();
        $this->assertInstanceOf(View::class, $view);
        $this->assertArrayHasKey('products', $view->getData());
        $this->assertCount(10, $view->getData()['products']);
    }
}
