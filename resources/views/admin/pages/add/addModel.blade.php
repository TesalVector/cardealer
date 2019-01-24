@extends('admin.layouts.base')    
@section('body')   
 <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid admin-dashboard">
            <h1 class="font-weight-bold">Add new Model</h1>
            <a href="#menu-toggle" class="btn btn-secondary mt-3 mb-3" id="menu-toggle">Menu</a>
            <div class='container'>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action='{{ url('/addModel') }}' method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">Select Brand</label>
                                <select name='brand' class="form-control">
                                    @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name model</label>
                                <input type="text" name="model" class="form-control" placeholder="Name model">
                            </div>
                            <div class="form-group">
                                <label>Model image</label>
                                <div class="custom-file">
                                    <input type="file" name='model_img' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Images for slide show</label>
                                <div class="custom-file">
                                    <input type="file" name='slide1' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name='slide2' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name='slide3' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                                <div class="custom-file">
                                        <input type="file" name='slide4' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                    <div class="custom-file">
                                    <input type="file" name='slide5' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name='slide6' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Wheel size</label>
                                <input type="text" name="wheels_size" class="form-control" placeholder="Wheel size">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Condition</label>
                                <select name='conditions' class="form-control">
                                    @foreach ($conditions as $condition)
                                        <option value="{{$condition}}">{{$condition}}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Extartior color</label>
                                <input type="text" name="exterior_color" class="form-control" placeholder="Extartior color">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Interior color</label>
                                <input type="text" name="interior_color" class="form-control" placeholder="Interior color">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tansmission</label>
                                <input type="text" name="transmission" class="form-control" placeholder="Tansmission">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Drivetrain</label>
                                    <select name='drivetrain' class="form-control">
                                        @foreach ($drivetrains as $drivetrain)
                                            <option value="{{$drivetrain}}">{{$drivetrain}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">HP</label>
                                <input type="text" name="hp" class="form-control" placeholder="HP">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CC</label>
                                <input type="text" name="cc" class="form-control" placeholder="CC">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Engine</label>
                                <select name='engine' class="form-control">
                                    @foreach ($engines as $engine)
                                        <option value="{{$engine->id}}">{{$engine->name}}</option>   
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Consumption</label>
                                <input type="text" name="consumption" class="form-control" placeholder="Consumption">
                            </div>
                            <div class="row">
                                <div class="col-md-6 description-list-p  model-add">
                                  <span>Basic package</span>  
                                    <ul class="list-group mt-4">
                                        @foreach($packages as $i=>$package)
                                            <li class="list-group-item"><input type="checkbox" class="item_{{$i+1}}" value="{{ $package->id }}" data-package='basic'><span><label for="exampleInputPassword1" class='ml-3'>{{ $package->name }}</label></span></li>
                                        @endforeach
                                    </ul> 
                                </div>
                                <div class="col-md-6  description-list-p  model-add">
                                    <span>Extra package</span>  
                                    <ul class="list-group mt-4">
                                        @foreach($packages as $i=>$package)
                                            <li class="list-group-item"><input type="checkbox" class="item_{{$i+1}}" value="{{ $package->id }}" data-package='extra'><span><label for="exampleInputPassword1" class='ml-3'>{{ $package->name }}</label></span></li>
                                        @endforeach
                                    </ul> 
                                  </div>
                            </div>
                                @foreach ($packages as $i => $package)
                                    <input type="hidden" id='package_{{$i+1}}' name='item{{$i+1}}' value="">
                                @endforeach
                            <div class="form-group mt-4">
                                <label for="description">Description</label>
                                <textarea class='form-control' name="description" cols="30" rows="10"></textarea>
                            </div>             
                            <button type="submit" class="btn btn-success">Add</button>                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <script>


        $("form input:checkbox").on('click', function(){
            var str = $(this).attr('class');
            var x = str.split('_').pop();
        
            var package = $(this).attr('data-package');
        
        
        
            $(".item_"+x).change(function() {
                var checked = $(this).is(':checked');
                var hiddenVal;
                hiddenVal = $(".item_"+x).val();
                if(package === 'basic'){
                    $("#package_"+x).val('basic_'+hiddenVal);
                    //console.log('set basic');
                }else if(package === 'extra'){
                    $("#package_"+x).val('extra_'+hiddenVal);
                    //console.log('set extra');
                }
            
                console.log($("#package_1").val());
            
                $(".item_"+x).prop('checked',false);
                if(checked) {
                    $(this).prop('checked',true);
                }
            });


        });

        $('.date-own').datepicker({
                minViewMod: 2,
                format: 'yyyy'
            });
        
    </script>
        
    <!-- /#page-content-wrapper -->
@stop