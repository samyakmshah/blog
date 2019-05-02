@extends('main') <!--Blade extending main.blade.php-->

@section('title', '| Welcome')

@section('content')
      <div class="jumbotron">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead">Welcome to my machine learning, data science and engineering blog. Thank you for visiting.</p>
        <hr class="my-4">
        <p>Learn something new</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Random Article</a>
        </p>
      </div> 

      <div class = "row">
        <div class="col-md-8">
          <div class="post">
            <h3>Post Title</h3>
            <p>sodijf asdfo aiof osdj oaosjfoaj sod joasdi fjaso jfao sdif ajosdif oais jfoasi dfjoaisj ofjaso ifjao sijf oasij foiasj ofia sjodifj aosij foas jodfi aosj oaisdf jaos dfj. 
            </p>
            <a href="#" class = "btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>sodijf asdfo aiof osdj oaosjfoaj sod joasdi fjaso jfao sdif ajosdif oais jfoasi dfjoaisj ofjaso ifjao sijf oasij foiasj ofia sjodifj aosij foas jodfi aosj oaisdf jaos dfj. 
            </p>
            <a href="#" class = "btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>sodijf asdfo aiof osdj oaosjfoaj sod joasdi fjaso jfao sdif ajosdif oais jfoasi dfjoaisj ofjaso ifjao sijf oasij foiasj ofia sjodifj aosij foas jodfi aosj oaisdf jaos dfj. 
            </p>
            <a href="#" class = "btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post">
            <h3>Post Title</h3>
            <p>sodijf asdfo aiof osdj oaosjfoaj sod joasdi fjaso jfao sdif ajosdif oais jfoasi dfjoaisj ofjaso ifjao sijf oasij foiasj ofia sjodifj aosij foas jodfi aosj oaisdf jaos dfj. 
            </p>
            <a href="#" class = "btn btn-primary">Read More</a>
          </div>
        </div>
        <div class = "col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
      </div>
@stop