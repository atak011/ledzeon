<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getValue($deviceId)
    {
        $device = Device::where('deviceId',$deviceId)->first();
        $response = Response::make($device->value, 200);
        $response->header('Content-Type', 'text/plain');
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setValue($deviceId,Request $request)
    {
        $device = Device::where('deviceId',$deviceId)->first();
        $device->value = $request->value;
        return $device;
    }


    public function create(Request $request)
    {
       return Device::create([
           'mac_address' => $request->mac_address,
           'value' => 0,
           'deviceId' => strtoupper(Str::random(4)),
           'status' => 0,
        ]);
    }
}
