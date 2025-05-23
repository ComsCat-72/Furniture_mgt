<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Furniture;
use Illuminate\Support\Facades\Response;

class FurnitureController extends Controller{
    
    public function createFurniture(Request $req) {

        $furniture_name = $req->FurnitureName;
        $f_owner = $req->FurnitureOwnerName;
        $model = new Furniture;
        $model->FurnitureName = $furniture_name;
        $model->FurnitureOwnerName = $f_owner;
        $model->save();
        return redirect()->route("all_furniture");
    }

    public function all_furniture() {
        $model = new Furniture;
        $data = $model->all();
        return view('all_furniture/index', ['furniture' => $data]);
    }

    public function update_furniture(Request $req) {
        $f_id = $req->id;
        $furniture_name = $req->FurnitureName;
        $f_owner = $req->FurnitureOwnerName;
        $model = new Furniture;
        $data = $model->find($f_id);
        if($data) {
            $data->FurnitureName = $furniture_name;
            $data->FurnitureOwnerName = $f_owner;
            $data -> save();
            return redirect()->route("all_furniture");
        }
    }

   
    public function updateForm($FurnitureId) {
           $model = new Furniture;
           $data = $model->find($FurnitureId); // Use the route parameter directly

           if (!$data) {
            return redirect()->back()->with('error', 'Furniture not found.');
           }

    return view('update_furniture/index', compact("data"));
}

    public function deleteFurniture(Request $req) {
        $id = $req->FurnitureId;
        $model = new Furniture;
        $data = $model->find($id);
        if($data) {
            $data->delete();
            $data= $model->all();
            return redirect()->route("all_furniture");
        }else {
            return view('home');
        }
    }

    public function generateTxtReport() {
        $furniture = Furniture::all();
        
        // Prepare the content for the text file
        $content = "Furniture Management System Report\n";
        $content .= "Generated on: " . now()->format('Y-m-d H:i:s') . "\n\n";
        $content .= "FURNITURE LIST:\n";
        $content .= "----------------------------------------\n\n";
        
        foreach ($furniture as $item) {
            $content .= "ID: " . $item->id . "\n";
            $content .= "Furniture Name: " . $item->FurnitureName . "\n";
            $content .= "Owner: " . $item->FurnitureOwnerName . "\n";
            $content .= "Created: " . $item->created_at . "\n";
            $content .= "----------------------------------------\n";
        }
        
        // Create the response with the text content
        $response = Response::make($content);
        $response->header('Content-Type', 'text/plain');
        $response->header('Content-Disposition', 'attachment; filename="furniture_report.txt"');
        
        return $response;
    }
}
