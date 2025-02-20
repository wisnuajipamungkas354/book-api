<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($message, $code = 200, $result = null)
    {
        $response = [
            'status' => 'success',
            'message' => $message,
        ];

        if($result !== null) {
            $response['data'] = $result;
        }
  
        return response()->json($response, $code);
    } 

     /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($message, $code = 404, $errorMessages = [])
    {
        $response = [
            'status' => 'error',
            'message' => $message,
        ];
  
        if(!empty($errorMessages)){
            $response['errorMessage'] = $errorMessages;
        }
  
        return response()->json($response, $code);
    }
}
