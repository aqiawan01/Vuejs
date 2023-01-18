<?php
namespace App\Http\Traits;
use stdClass;

trait ApiResponse{

    protected function apiSuccessMessageResponse($message='Success', $data=[])
    {
        return response()->json([
            "status" => 1,
            "message" => $message,
            "data" => $data
        ], 200);
    }

    protected function apiErrorMessageResponse($message='Failed', $data=[], $status = 0)
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ], 400);
    }

    protected function apiVerificationResponse($message='Failed', $data=[], $status = 0)
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ], 200);
    }

    protected function apiErrorMessageResponseCustom($message='Failed', $data=[], $status = 0)
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ], 200);
    }

    protected function apiValidatorErrorResponse($message='Failed', $data=[])
    {
        return response()->json([
            "status" => 0,
            "message" => $message,
            "data" => $data
        ], 400);
    }
}