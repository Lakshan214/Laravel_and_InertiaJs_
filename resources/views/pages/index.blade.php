<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
    


    
    <div class="contaner">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel 09 crud</h2>
                
                @if (session()->has('message'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Deleted task!!</strong> You should check in on some of those fields below.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif 
                
                <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Task</a>

                <table class="table">
                   
                        
                    
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tasks</th>
                        <th scope="col">stutas</th>
                        <th scope="col">Acton</th>
                      
                      </tr>
                    </thead>
                    @foreach ($task as $key=> $task)
                    <tbody>
                      <tr>
                        <th >{{++$key}}</th>
                        <td>{{$task->name}}</td>
                        {{-- <td>
                            @if ($task->stuts==0 )
                              <span class="badge bg-warning">Not Completed</span>
                            @else  
                            <span class="badge bg-success">Completed</span>
                           @endif
                       </td> --}}
                        <td>
                           
                            <a href="{{Route('task.update',$task->id)}}"  class="btn btn-success "><i class="las la-edit"></i></a>
                        
                     
                     
                            
                            <a href="{{Route('task.delete',$task->id)}}" class="btn btn-danger"><i class="las la-trash"></i></a>
                        </td>
                      </tr>
                    
                    </tbody>

                    @endforeach
                  </table>


               

            </div>
        </div>
    </div>
         
  @include('pages.addTask')    
   @include('pages.js')
  
  
  
</body>
</html>