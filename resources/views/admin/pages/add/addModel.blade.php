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
                                <label>Images</label>
                                <input type="file" name="model_img" class="form-control">
                                <input type="file" name="slide1" class="form-control">
                                <input type="file" name="slide2" class="form-control">
                                <input type="file" name="slide3" class="form-control">
                                <input type="file" name="slide4" class="form-control">
                                <input type="file" name="slide5" class="form-control">
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
                            <div class="form-group">
                                <p>Make basic package</p>
                                @foreach ($packages as $i => $package)
                                    <label for="exampleInputPassword1">{{ $package->name }}</label>
                                    <input type="checkbox" class="item_{{$i+1}}" value="{{ $package->id }}" data-package='basic'>
                                @endforeach
                                <p>Make extra package</p>
                                @foreach ($packages as $i => $package)
                                    <label for="exampleInputPassword1">{{ $package->name }}</label>
                                    <input type="checkbox" class="item_{{$i+1}}" value="{{ $package->id }}" data-package='extra'>
                                @endforeach
                                @foreach ($packages as $i => $package)
                                    <input type="hidden" id='package_{{$i+1}}' name='item{{$i+1}}' value="">
                                @endforeach
                            </div>
                            <div class="form-group">
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
        
    </script>
        
    <!-- /#page-content-wrapper -->
@stop