@extends('admin.layouts.base')
@section('body')
    @if( !isset(Auth::user()->email) )
        <script>window.location = '/admin'</script>
    @endif
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 order">
                <div class="tenor-gif-embed" data-postid="4950585" data-share-method="host" data-width="50%" data-aspect-ratio="1.3333333333333333"><a href="https://tenor.com/view/awesome-computer-kid-computer-thumbs-up-alright-kid-gif-4950585">Awesome Computer Kid Thumbs Up GIF</a> from <a href="https://tenor.com/search/awesomecomputerkid-gifs">Awesomecomputerkid GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        </div>
    </div>
</div>
@stop