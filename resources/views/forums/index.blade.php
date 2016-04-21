@extends('layouts.app')

@section('content')
    <div class="container">
      <div clas="row">
        <div class="col-lg-2 btn-group">
          <label class="control-label">Languages</label><br>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a>English</a></li>
            <li role="separator" class="divider"></li>
            <li><a> العربية</a></li>
            <li><a>azərbaycanca</a></li>
            <li><a>বাংলা</a></li>
            <li><a>català</a></li>
            <li><a>کوردیی ناوەندی</a></li>
            <li><a>čeština</a></li>
            <li><a>dansk</a></li>
            <li><a>Deutsch</a></li>
            <li><a>English</a></li>
            <li><a>British English</a></li>
            <li><a>Esperanto</a></li>
            <li><a>español</a></li>
            <li><a>فارسی</a></li>
            <li><a>suomi</a></li>
            <li><a>føroyskt</a></li>
            <li><a>français</a></li>
            <li><a>ગુજરાતી</a></li>
            <li><a>हिन्दी</a></li>
            <li><a>Bahasa Indonesia</a></li>
            <li><a>italiano</a></li>
            <li><a>日本語</a></li>
            <li><a>ქართული</a></li>
            <li><a>ភាសាខ្មែរ</a></li>
            <li><a>한국어</a></li>
            <li><a>Lëtzebuergesch</a></li>
            <li><a>lietuvių</a></li>
            <li><a>Nederlands</a></li>
            <li><a>occitan</a></li>
            <li><a>polski</a></li>
            <li><a>پښتو</a></li>
            <li><a>português do Brasil</a></li>
            <li><a>русский</a></li>
            <li><a>Scots</a></li>
            <li><a>سنڌي</a></li>
            <li><a>සිංහල</a></li>
            <li><a>svenska</a></li>
            <li><a>ئۇيغۇرچە</a></li>
            <li><a>اردو</a></li>
            <li><a>中文</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <label class="control-label">Cost</label><br>
          <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
  <input type="text" class="form-control" placeholder="200" aria-describedby="basic-addon1">
<span class="input-group-addon" id="basic-addon2">.00</span></div></div>
<div class="col-lg-2">
<label class="control-label">Domain</label><br>
  <div class="input-group">
  <input type="text" class="form-control" placeholder="lyre" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">.com</span>
</div></div>
<div class="col-lg-2"><label class="control-label">Duration</label><br><div class="input-group">
<input type="text" class="form-control" placeholder="2 hours" aria-describedby="basic-addon1">
<span class="input-group-addon btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <small><span class="caret"></span></small>
    <span class="sr-only">Toggle Dropdown</span>
  </span>
  <ul class="dropdown-menu">
    <li><a href="#">minutes</a></li>
    <li><a href="#">hours</a></li>
    <li><a href="#">days</a></li>
    <li><a href="#">weeks</a></li>
  </ul>
</div></span></div>
<div class="col-lg-2">
  <label class="control-label">Author</label>
<input type="text" class="form-control" placeholder="John Doe" aria-describedby="basic-addon1">
</div>


<div class="col-lg-2">  <label class="control-label">Search</label>
<div class="input-group">
<input type="text" class="form-control" placeholder="Keyword" aria-describedby="basic-addon1">
<span class="input-group-btn">
        <button class="btn btn-primary" type="button">Go!</button>
      </span>
</div></div>
      </div>
      <br><br><br><br>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categories
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <div data-example-id="simple-nav-stacked" class="bs-example">
                       <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                          <li class="active" role="presentation"><a href="#">Business & Management</a></li>
                           <li role="presentation"><a href="#">Creative Arts & Media</a></li>
                            <li role="presentation"><a href="#">History</a></li>
                            <li role="presentation"><a href="#">Languages & Cultures</a></li>
                            <li role="presentation"><a href="#">Law</a></li>
                            <li role="presentation"><a href="#">Literature</a></li>
                            <li role="presentation"><a href="#">Nature & Environment</a></li>
                            <li role="presentation"><a href="#">Online & Digital</a></li>
                            <li role="presentation"><a href="#">Politics & Modern World</a></li>
                            <li role="presentation"><a href="#">Science & Maths</a></li>
                            <li role="presentation"><a href="#">Computing & Technology</a></li>
                            <li role="presentation"><a href="#">Sports & Leisure</a></li>
                            <li role="presentation"><a href="#">Teaching & Studying</a></li>
                            <li role="presentation"><a href="#">Personal Development</a></li>


                           </ul>
                         </div>
                       </div>

                </div>
        </div>
        <div class="col-sm-9">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Courses
              </div>
              <div class="panel-body">
                <ul class="nav nav-tabs">
                  <li role="presentation"><a href="#">Cost <img src="{{ asset('img/generic-sorting-desc.png') }}" width="15px" height="15px"/></a></li>
                  <li role="presentation"><a href="#">Offered <img src="{{ asset('img/generic-sorting-asc.png') }}" width="15px" height="15px"/></a></li>
                  <li role="presentation"><a href="#">Title <img src="{{ asset('img/generic-sorting-asc.png') }}" width="15px" height="15px"/></a></li>
                  <li role="presentation"><a href="#">Difficulty <img src="{{ asset('img/generic-sorting-desc.png') }}" width="15px" height="15px"/></a></li>

                </ul> <br><br>
                <div class="jumbotron row" style="margin:2%;padding:2%;">
                  <h2>Course Title: This is the course's subtitle</h2>
                  <div class="col-lg-9">
                    <div class="row">
                  <div class="col-lg-4">
                    <a href="#" class="thumbnail">
                      <img src="" alt="" style="height: 100px; width: 100px">
                    </a>
                  </div>
                  <div class="col-lg-8">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius mauris tellus. Sed tristique ultricies nulla ac feugiat. Maecenas tempor nunc sit amet volutpat vehicula. Integer rutrum nec odio sit amet tempor. </h5>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                  </div>
                </div>
                <div class="row"><div class="btn-group btn-group-lg col-lg-10" role="group" aria-label="Large button group"> <button type="button" class="btn btn-default">Save to List</button> <button type="button" class="btn btn-default">View Course</button><button type="button" class="btn btn-default">More Like This</button> </div></div>
                </div>
                  <div class="col-lg-3">
                    <a href="#">Upvotes <span class="badge">42</span></a>
                    <h4> * * * * </h4>
                    <h5>Cost: </h5>
                    <h5>Duration: </h5>
                    <h5>Organization: </h5>
                    <h5>Publish Date: </h5>
                    <h5>Ending Date: </h5>
                  </div>
                  <div class="row" style="display:inline-flex;"> <small><b> Tags:</b> something, else, another, and, this, too, also and more</small></div>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
