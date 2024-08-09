<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;

class GoogleSheetsController extends Controller
{
    protected $googleSheetsService;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function fetchOrders()
    {
        $spreadsheetId = '1Lw3TymlZczVYyuqqQGvbh-kQgXBbpHrP8AgNLpp17uQ';
        $range = 'Orders sheet!A:F'; // Adjust the range according to your sheet layout
        $data = $this->googleSheetsService->getSheetData($spreadsheetId, $range);

        // Process and return the data as needed
        return view('orders.index', compact('data'));
    }

    public function fetchProducts()
    {
        $spreadsheetId = '1yY-GzZ51pnM8wPaAJ6SdHZzg9gwzqF5C3D9GnETxSKo';
        $range = 'Products sheet!A:D'; // Adjust the range according to your sheet layout
        $data = $this->googleSheetsService->getSheetData($spreadsheetId, $range);

        // Process and return the data as needed
        return view('products.index', compact('data'));
    }
}
