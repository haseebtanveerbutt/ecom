@extends('admin.layout.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
    
<div class="content-wrapper">
   
  <div class="text-center"><h3>Add Content</h3></div>
   <section class="content">


     @if(count($errors)>0)

     <div class="alert alert-danger">

       <ul>

         @foreach($errors->all() as $error)

           <li>{{$error}}</li>

         @endforeach

       </ul>

     </div>

   @endif   

<div class="flash-message">
     @foreach (['danger'] as $msg)
      @if(Session::has('alert-' . $msg))
       <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
      @endif
     @endforeach
    </div>

<div class="flash-message">
     @foreach (['success'] as $msg)
      @if(Session::has('alert-' . $msg))
       <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
      @endif
     @endforeach
    </div>    


   
<section class="content">
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-10">
       <div class="card card-primary">
         <div class="card-header">
           <h3 class="card-title">Add Content</h3>
         </div>
             <!-- /.card-header -->
         <div class="card-body">
         <form action="{{URL::to('')}}/save-content" method="post" enctype="multipart/form-data">
         @csrf
        <section>
          <div class="panel panel-header">
           <div class="row col-md-12 col-sm-6">
             <div class="col-md-12">
               <div class="form-group">
                <label>Select Course</label>
                 <select name="course_name" type="text" class="custom-select" required="">
                   <option value="">Select Course...</option>

                 {{-- @foreach($data['course'] as $key)  
                   <option value="{{$key->id}}" >{{$key->title}}</option>
                 @endforeach         --}}

                 <option>fist phase</option>

                 <option>second phase</option>

                 <option>Final phase</option>

                  </select>
                 
               </div>
             </div>

             
           </div>
          </div>
          <div class="panel panel-footer bg">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Phase</th>
                  <th class="text-center">Video File</th>                  
                  <th>
                   <a href="#" class="addRow">
                     <p class="text-center"><i class="fas fa-plus"></i></p>
                   </a>
                 </th>
                  
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <input type="text" name="title[]" placeholder="Enter Title" class="form-control quality" required="" >
                  </td>

                  <td>
                   <div class="col-sm-12">
                     <div class="form-group">
                       
                       <select class="form-control" name="phase[]" required="">

                         <option value="">Select phase</option>

                         <option>fist phase</option>

                         <option>second phase</option>

                         <option>Final phase</option>
                         
                       </select>
                     </div>
                   </div>
                  </td>
                   
                  <td>
                   <div class="form-group">
                    <div class="input-group">
                     <div class="custom-file">
                      <input type="file" name="name[]" class="custom-file-input" id="exampleInputFile" multiple="multiple" required="">
                      <label class="custom-file-label" for="exampleInputFile">Enter file</label>
                     </div>
                    </div>
                   </div>    
                  </td>

                   <td>
                    <a href="#" name="" class="btn btn-danger remove">
                      <i  class="glyphicon glyphicon-remove">remove</i>
                    </a>
                  </td>
                  
                   
                </tr>
              </tbody>

              <tfoot>
                <tr>
                  <td style="border:none"></td>
                  <td style="border:none"></td>
                  <td style="border:none"></td>
                  
                  
                  
                  
                  <td><input class="btn btn-success" type="submit" name="" value="submit"></td>
                </tr>
              </tfoot>

            </table>
          </div>
        </section>
      </form>
    </div> 

<script type="text/javascript">

 $('.addRow').on('click',function(){
   addRow();

 });

 function addRow()
 {
   var tr='<tr>'+

   '<td><input type="text" name="title[]" placeholder="Enter Title" class="form-control" required=""></td>'+
   '<td><div class="col-sm-12"><div class="form-group"><select class="form-control" name="phase[]" required=""><option value="">Select phase</option><option>fist phase</option><option>Second phase</option><option>Final phase</option> </select></div> </div> </td>'+
   '<td><div class="form-group"><div class="input-group"> <div class="custom-file"> <input type="file" name="name[]" multiple="multiple" class="custom-file-input" id="exampleInputFile" required=""> <label class="custom-file-label" for="exampleInputFile">Enter file</label></div></div></div></td>'+
   ' <td><a href="#" name="remove[]" class="btn btn-danger remove"><i  class="glyphicon glyphicon-remove">remove</i></a></td>'

   '</tr>';       

   $('tbody').append(tr);

 };

 $('.remove').live('click',function(){

   var last=$('tbody tr').length;
   if(last==1){
     alert('Last Row Cannot be deleted');
   }
   else{

     $(this).parent().parent().remove();
   }
   
 });
</script>
             <!-- /.card-body -->
           </div>
         </div>
       </div>
     </div>
   </section>
   
   
 </div>


 


@stop


