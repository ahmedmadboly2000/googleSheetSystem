<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\GoogleSheetsService;
use App\Models\Order;
use App\Models\Product;

class FetchOrdersAndProducts extends Command
{
    protected $signature = 'fetch:orders-products';
    protected $description = 'Fetch orders and products from Google Sheets and store them in the database';

    protected $googleSheetsService;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        parent::__construct();
        $this->googleSheetsService = $googleSheetsService;
    }

    public function handle()
    {
        // Fetch Orders
        $ordersSpreadsheetId = 'your_orders_spreadsheet_id'; // Replace with your actual Orders spreadsheet ID
        $ordersRange = 'Sheet1!A1:F'; // Adjust range as needed

        $orderRows = $this->googleSheetsService->getSheetData($ordersSpreadsheetId, $ordersRange);

        foreach ($orderRows as $row) {
            // Skip header row
            if ($row[0] === 'Order ID') {
                continue;
            }

            // Create or update order
            Order::updateOrCreate(
                ['order_id' => $row[0]], // Unique key
                [
                    'client_name' => $row[1],
                    'phone_number' => $row[2],
                    'product_code' => $row[3],
                    'final_price' => $row[4],
                    'quantity' => $row[5],
                ]
            );
        }

        // Fetch Products
        $productsSpreadsheetId = 'your_products_spreadsheet_id'; // Replace with your actual Products spreadsheet ID
        $productsRange = 'Sheet1!A1:D'; // Adjust range as needed

        $productRows = $this->googleSheetsService->getSheetData($productsSpreadsheetId, $productsRange);

        foreach ($productRows as $row) {
            // Skip header row
            if ($row[0] === 'Product Code') {
                continue;
            }

            // Create or update product
            Product::updateOrCreate(
                ['product_code' => $row[0]], // Unique key
                [
                    'product_name' => $row[1],
                    'description' => $row[2],
                    'country' => $row[3],
                ]
            );
        }

        $this->info('Orders and Products have been fetched and stored.');
    }
}
