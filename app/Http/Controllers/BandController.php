<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\User;
use Illuminate\Http\Request;

class BandController extends Controller
{
   public function showAction($id){
    $band= Band::find($id);

    return view('updateBand', ['band' =>$band]);
   }
   public function showInsertAction(){
       return view('addband');
   }
    public function insertAction(Request $request){
    $band = new Band();
    $band ->nazov = $request->input('nazov');
    $band ->pocet_clenov = $request->input('pocet_clenov');
    $band ->zaner = $request->input('zaner');
    $band->save();

    return response()->view('addband');
    }
    public function updateAction($id, Request $request){
    $band = Band::find($id);
        $band ->nazov = $request->input('nazov');
        $band ->pocet_clenov = $request->input('pocet_clenov');
        $band ->zaner = $request->input('zaner');

        $band->update();
        return redirect()->action('BandController@showAllAction');
    }
    public function deleteAction($id){
    $band = Band::find($id);
    $band->delete();
        return redirect()->action('BandController@showAllAction');
    }
    public function showAllAction(){
       $bands = Band::all();
       $pole = json_encode($bands);

         return view('showAllBands', ['bands' => $bands]);
    }
    public function showFiltered(Request $request){
       $search = $request->get('q');
        $bands = Band::where('nazov','like','%'.$search.'%')->get();
        $pole = json_encode($bands);
        echo $pole;
          return view('showAllBands', ['bands' => $bands]);
    }
}
