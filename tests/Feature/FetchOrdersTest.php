<?php
// tests/Feature/FetchOrdersTest.php
// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Tests\TestCase;
// use App\Models\Order;

// class FetchOrdersTest extends TestCase
// {
//     use RefreshDatabase;

//     /** @test */
//     public function it_fetches_orders_from_google_sheets_and_stores_them()
//     {
//         // Simulate the FetchOrders command and assert orders are stored in the database
//     }
// }
// tests/Feature/FetchOrdersTest.php
// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Tests\TestCase;
// use App\Models\Order;
// use Illuminate\Support\Facades\Artisan;
// use Google_Client;
// use Google_Service_Sheets;
// use Mockery;

// class FetchOrdersTest extends TestCase
// {
//     use RefreshDatabase;

//     /** @test */
//     public function it_fetches_orders_from_google_sheets_and_stores_them()
//     {
//         // Create a mock Google_Client
        
//         $client = Mockery::mock(Google_Client::class);
//         // $client->shouldReceive('setApplicationName')->once();
//         // $client->shouldReceive('setScopes')->once();
//         // $client->shouldReceive('setAuthConfig')->once();
        
//         // // Create a mock Google_Service_Sheets
//         $service = Mockery::mock(Google_Service_Sheets::class);
//         // $service->shouldReceive('spreadsheets_values->get')
//         //         ->once()
//         //         ->andReturn((object) [
//         //             'getValues' => [
//         //                 ['123', 'John Doe', '555-1234', 'P001', '99.99', '1'],
//         //                 ['124', 'Jane Smith', '555-5678', 'P002', '149.99', '2']
//         //             ]
//         //         ]);

//         // Use dependency injection to replace the actual API call with mocks
//         $this->app->instance(Google_Client::class, $client);
//         $this->app->instance(Google_Service_Sheets::class, $service);

//         // Run the command
//         Artisan::call('fetch:orders');

//         // Assert that orders have been inserted into the database
//         $this->assertDatabaseHas('orders', [
//             'order_id' => '123',
//             'client_name' => 'John Doe',
//             'phone_number' => '555-1234',
//             'product_code' => 'P001',
//             'final_price' => '99.99',
//             'quantity' => 1
//         ]);

//         $this->assertDatabaseHas('orders', [
//             'order_id' => '124',
//             'client_name' => 'Jane Smith',
//             'phone_number' => '555-5678',
//             'product_code' => 'P002',
//             'final_price' => '149.99',
//             'quantity' => 2
//         ]);
//     }
// }
