<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\User;
use Illuminate\Http\Request;

class BandController extends Controller
{
   public function showAction($id){
  $band= Band::find($id);
  echo $band->nazov."<br>";
  echo $band->pocet_clenov."<br>";
  echo $band->zaner."<br>";
   }
    public function insertAction(){
    $band = new Band();
    $band->nazov = "Tublatanka";
    $band->pocet_clenov = 5;
    $band->zaner = "Asi rock";
    $band->save();

    }
    public function updateAction($id){
    $band = Band::where("id","=",$id)->first();
    $band->update(["pocet_clenov" => mt_rand(1,10)]);
    }
    public function deleteAction($id){
    $band = Band::find($id);
    $band->delete();
    }
    public function showAllAction(){
       $bands = Band::all();
       foreach ($bands as $band){
           echo $band->nazov." ".$band->pocet_clenov." ".$band->zaner."<br>";
       }
    }
}
