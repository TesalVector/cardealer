<!-- Footer -->
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="logo"><a href="#"> Car Dealer </a></h2>
            </div>
            <div class="col-sm-2">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="#" class="twitter"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fab fa-instagram"></i></a>
                </div>
                <button type="button" class="btn btn-warning">Contact us</button>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© {{ date('Y') }} Bee IT </p>
    </div>
</footer>
<img src="" alt="" id='car-scroll-top'>
<!-- My JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script>
    
    $(document).on('input change', '#slider_front', function() {
        $('#slider_value_front').html( $(this).val() );
        $(this).val($(this).val());
    });

    $(document).on('input change', '#slider_back', function() {
        $('#slider_value_back').html( $(this).val() );
    });

    $(document).on('input change', '#slider_right', function() {
        $('#slider_value_right').html( $(this).val() );
    });

    $(document).on('input change', '#slider_left', function() {
        $('#slider_value_left').html( $(this).val() );
    });

    $('.target').change(function(){
        $id = $('.target').val();
        $.getJSON('http://localhost/data/'+$id,function(data){

            //reset all value
            document.getElementById('slider_value_front').innerHTML = 0;
            document.getElementById('slider_value_back').innerHTML = 0;
            document.getElementById('slider_value_right').innerHTML = 0;
            document.getElementById('slider_value_left').innerHTML = 0;

            document.getElementById('slider_front').value = 0;
            document.getElementById('slider_back').value = 0;
            document.getElementById('slider_right').value = 0;
            document.getElementById('slider_left').value = 0;

            // get data from JSON and set max value
            document.getElementById('slider_front').max = data[0]['front'];
            document.getElementById('slider_back').max = data[0]['back'];
            document.getElementById('slider_right').max = data[0]['right'];
            document.getElementById('slider_left').max = data[0]['left'];
        });
    })
    
</script>