<?php

namespace App\Helpers;

class ApiResponse
{
    public static function success($data = [], string $message = 'success', int $statusCode = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    public static function error(string $message = 'falied', int $statusCode = 500)
    {
        return response()->json([
            'message' => $message,
        ], $statusCode);
    }

    
}
