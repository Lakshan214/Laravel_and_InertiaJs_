<?php

namespace App\Http\Controllers;

use domain\Facades\StudentFacades;
use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class StudentController extends ParentController 
{
    public function index()
      {
       
        return Inertia::render('Students/Index');
        
       }

     public function  list()
     {
         $student= StudentFacades::all();
         return response()->json($student);

     }



     public function show($id)
     {
      $student = StudentFacades::get($id);
        return response()->json( $student);
     }  



       public function save(Request $request)
       {
        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('image', 'public');
         }
         return StudentFacades::save($request->all(),$image_path);
       }




       public function delete($id)
        {
         return StudentFacades::delete($id);
        }


      public function done($id)
        {
          return StudentFacades::done($id);
        }



      public function update(Request $request,$id)
        {

         return StudentFacades::update($request->all(),$id);
        
        }

      public function uploadImage(Request $request)
          {
          if ($request->hasFile('image')) {
              $imagePath = $request->file('image')->store('images', 'public');
              return response()->json(['url' => asset('storage/' . $imagePath)]);
          }

          return response()->json(['error' => 'Image upload failed'], 400);
}
    
   
       
}
