@extends('admin.layout.admin')

@section('content')
<div class="content-wrapper">
    <div class="text-center"><h3>Add Questions</h3></div>
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
            <div class="col-md-12">    
               <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('add-competition.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <section>
                                    <div class="panel panel-header " >
                                        <div class="row col-md-12 col-sm-6">
                                            <div class="col-md-12" style="margin-top:50px;">
                                                <div class="form-group">
                                                    <label>Select Course</label>
                                                    <select name="course_name[]" type="text" class=" form-control" required="">
                                                        <option value="">Select Course</option>
                                                    {{-- @foreach($data['course'] as $key)  
                                                        <option value="{{$key->id}}" >{{$key->title}}</option>
                                                    @endforeach         --}}
                                                        <option>Php</option>
                                                        <option>Laravel</option>
                                                        <option>D jango</option>
                                                    </select>
                                                </div>
                                            </div>        
                                        </div>
                                    </div>
                                    <div class="panel panel-header">
                                        <div class="row col-md-12 col-sm-6">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Expected Time</label>
                                                    <input type="time" class="form-control">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Difficulty Level</label>
                                                    <select name="difficult_level[]" type="text" class="form-control " required="">
                                                
                                                    {{-- @foreach($data['course'] as $key)  
                                                        <option value="{{$key->id}}" >{{$key->title}}</option>
                                                    @endforeach         --}}
                                                        <option>Low</option>
                                                        <option selected >Normal</option>
                                                        <option>High</option>
                                                    </select>
                                                </div>
                                            </div>       
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="text-center col-md-12">
                                            <a href="#" style="" class="addRow">
                                                <h3 class="text-center">Add Multiple Questions</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=" panel-footer bg">
                                        <table class="table table-bordered">

                                            <tbody>
                                              
                                                <tr>
                                                    <th class="text-center">Question Body</th>                                                     
                                                    <td>
                                                        <input type="text" name="Question_body[]" placeholder="Enter Question" class="form-control " required="" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center col-md-3">(A)</th>
                                                    <th class="text-center col-md-3">(B)</th>
                                                    <th class="text-center col-md-3">(C)</th>
                                                    <th class="text-center col-md-3">(D)</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="option_one[]" placeholder="option 1" class="form-control quality" required="" >
                                                        {{-- <strong class="ml-2">Active Status</strong> --}}
                                                        <select class="form-control" name="status_one[]" >       
                                                            <option value=true>True</option>
                                                            <option value=false selected>False</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="option_two[]" placeholder="option 2" class="form-control quality" required="" >
                                                        <select class="form-control" name="status_two[]" >       
                                                            <option value=true>True</option>
                                                            <option value=false selected>False</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="option_three[]" placeholder="option 3" class="form-control quality" required="" >
                                                        <select class="form-control" name="status_three[]" >       
                                                            <option value=true>True</option>
                                                            <option value=false selected>False</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="option_four[]" placeholder="option 4" class="form-control quality" required="" >
                                                        <select class="form-control" name="status_four[]" >       
                                                            <option value=true>True</option>
                                                            <option value=false selected>False</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td style="border:none"></td>
                                                    <td style="border:none"></td>
                                                    <td style="border:none"></td>                
                                                    <td style="border:none"><input class="btn btn-success" type="submit" name="" value="submit"></td>
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
    '<th class="text-center">Question Body</th>'+                                                     
    '<td><input type="text" name="Question_body[]" placeholder="Enter Question" class="form-control " required="" ></td>'+
    ' <td><a href="#" name="remove[]" class="btn btn-danger remove"><i  class="glyphicon glyphicon-remove">remove</i></a></td>'
+
    '</tr>'+
    '<tr>'+
    '<th class="text-center col-md-3">(A)</th>'+
    '<th class="text-center col-md-3">(B)</th>'+
    '<th class="text-center col-md-3">(C)</th>'+
    '<th class="text-center col-md-3">(D)</th>'+
    ' <td><a href="#" name="remove[]" class="btn btn-danger remove"><i  class="glyphicon glyphicon-remove">remove</i></a></td>'
+
    '</tr>'+
    
    '<tr>'+
        '<td><input type="text" name="option_one[]" placeholder="option 1" class="form-control quality" required="" ><select class="form-control" name="status_one[]" >       <option value=true>True</option><option value=false selected>False</option></select></td>'
        +
        '<td><input type="text" name="option_two[]" placeholder="option 2" class="form-control quality" required="" ><select class="form-control" name="status_two[]" >       <option value=true>True</option><option value=false selected>False</option></select></td>'
        +
        '<td><input type="text" name="option_three[]" placeholder="option 3" class="form-control quality" required="" ><select class="form-control" name="status_three[]" ><option value=true>True</option><option value=false selected>False</option></select></td>'
        +
        '<td><input type="text" name="option_four[]" placeholder="option 4" class="form-control quality" required="" ><select class="form-control" name="status_four[]" ><option value=true>True</option><option value=false selected>False</option></select></td>'
        +
        ' <td><a href="#" name="remove[]" class="btn btn-danger remove"><i  class="glyphicon glyphicon-remove">remove</i></a></td>'
+
    '</tr>';       
  
     $('tbody').append(tr);
  
   };
    $('.remove').live('click',function(){ 
        var last=$('tbody tr ').length;
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
     </section>     
   </div>
@stop
  
