<?php

namespace domain\Services;

use App\Models\Student;

class StudentServies{


    protected $student;
      
    
    
    public function __construct()
    {
        $this-> student =new Student();
       
    }
public function all(){
    return  $this->student->all();

}

public function get($id){
    return  $this->student->find($id);

}
public function save( $data){
 
$this->student-> create($data);



}

public function delete($id){

$student=$this->student->find($id);
$student->delete();


}
public function done($id){

    $student= $this->student->find($id);
    if ($student->status == 0) {
        $student->status = 1;
    } else {
        $student->status = 0;
    }
    $student->save();
    }
  
public function update($task_id){

$task=Student::find($task_id);

$task->update();


}


}
