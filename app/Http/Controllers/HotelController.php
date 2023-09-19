<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\County;

class HomeController extends Controller
{
    private $parserService;

    public function __construct(HotelParserService $parserService)
    {
        $this->parserService = $parserService;
    }

    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.show', compact('hotel'));
    }

    public function parseAndInsertData()
    {
        $htmlContent = '<!-- Your HTML content here -->';

        $result = $this->parserService->parseAndInsertData($htmlContent);

        // You can return a response based on the result
        return $result;
    }
} 