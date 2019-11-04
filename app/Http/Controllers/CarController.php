<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
   public function create(Request $request){
      $VehicleTitle=$request['VehicleTitle'];
      $VehicleID=$request['VehicleID'];
      $FuelType=$request['FuelType'];

      $car=new Car();

      $car->VehicleTitle=$VehicleTitle;
      $car->VehicleID=$VehicleID;
      $car->FuelType=$FuelType;

      $car->save();

      return redirect()->back();
   }

   public function view(){

   }
}
