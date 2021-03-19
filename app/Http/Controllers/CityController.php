<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CityController extends Controller
{
    public function __invoke()
    {
        try {
            $cities = City::getCities();
            return response()->json(['cities' => $cities])->setStatusCode(JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()])->setStatusCode(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
