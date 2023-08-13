<?php

namespace domain\Services;

use App\Models\Student;

class StudentServies{


    protected $task;
      
    
    
    public function __construct()
    {
        $this-> task =new Student();
       
    }
public function all(){
    return  $this->task->all();

}

public function get($id){
    return  $this->task->find($id);

}
public function save( $data){
 
$this->task-> create($data);



}

public function delete($id){

$task=$this->task->find($id);
$task->delete();


}
public function done($id){

    $task = $this->task->find($id);
    if ($task->status == 0) {
        $task->status = 1;
    } else {
        $task->status = 0;
    }
    $task->save();
    }
  
public function update($task_id){

$task=Student::find($task_id);

$task->update();


}


}
