<?php

// namespace Tests\Unit;

// use Tests\TestCase;
// use Mockery;
// use Google_Client;
// use Google_Service_Sheets;
// use Google_Service_Sheets_ValueRange;
// use App\Services\GoogleSheetsService;

// class GoogleSheetsServiceTest extends TestCase
// {
//     protected $client;
//     protected $service;
//     protected $sheets;

//     public function setUp(): void
//     {
//         parent::setUp();

//         // Mock Google_Client
//         $this->client = Mockery::mock(Google_Client::class);
//         // $this->client->shouldReceive('setAuthConfig')->once();
//         // $this->client->shouldReceive('addScope')->once();

//         // Mock Google_Service_Sheets
//         $this->sheets = Mockery::mock(Google_Service_Sheets::class);

//         // Mock the spreadsheets_values property of Google_Service_Sheets
//         $this->sheets->spreadsheets_values = Mockery::mock();
        
//         // Mock the `get` method on spreadsheets_values
//         $this->sheets->spreadsheets_values->shouldReceive('get')
//             ->andReturn(Mockery::mock(Google_Service_Sheets_ValueRange::class, function ($mock) {
//                 $mock->shouldReceive('getValues')->andReturn([
//                     ['Order ID', 'Client Name', 'Phone Number', 'Product Code', 'Final Price', 'Quantity']
//                 ]);
//             }));

//         // Initialize the service with mocks
//         $this->service = new GoogleSheetsService($this->client, $this->sheets);
//     }

//     public function testGetValues()
//     {
//         $values = $this->service->getValues('spreadsheetId', 'range');
//         $this->assertIsArray($values);
//         $this->assertEquals('Order ID', $values[0][0]);
//     }
// }
