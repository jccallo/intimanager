<?php

namespace App\Traits;

trait ApiResponser
{
    private function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json([
            'ok' => false,
            'error' => $message,
            'code' => $code
        ], $code);
    }

    protected function showResponse($response, $code = 200)
    {
        return $this->successResponse([
            'ok' => true,
            'data' => $response
        ], $code);
    }
}
