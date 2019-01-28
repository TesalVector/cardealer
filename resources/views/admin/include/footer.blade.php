


 
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- JS for slidebar navigation -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/mdb.js') }}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script>
        // NAKON TESTIRANJA OVAJ DEO PREMESTITI U APP.JS FAJL!!!!
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
