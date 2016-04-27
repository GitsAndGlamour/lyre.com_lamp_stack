@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-primary">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Forums</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-comment"></span> Discussions</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-retweet"></span> Activity <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Blog</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div class="row" style="padding:2%">
            <div class="col-lg-3">
                <div class="well">
                    <span class="input-group"><input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
  </span></span>

                </div>
                <a class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-plus"></span> Start a New Discussion</a>
                <br>
                <div class="list-group">
                    <button type="button" class="list-group-item disabled"> Categories<span style="float:right" class="glyphicon glyphicon-th-list"></span></button>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-open"></span> General</a>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> All Discussions</a>

                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Business & Management</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Creative Arts & Media</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> History</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Languages & Cultures</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Law</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Literature</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Nature & Environment</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Online & Digital</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Politics & Modern World</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Science & Maths</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Computing & Technology</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Sports & Leisure</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Teaching & Studying</a>
                    </li>
                    <a type="button" class="list-group-item"> <span class="glyphicon glyphicon-folder-close"></span> Personal Development</a>
                    </li>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">General</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
            <thead>
              <tr>
                <th class="hidden-xs"></th>
                <th class="hidden-xs"></th>
                <th>Forum Name</th>
                <th class="text-right">Topics</th>
                <th class="text-right">Replies</th>
                <th class="hidden-xs">Latest Post Info</th>
              </tr>
            </thead>
            <tbody><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_2.png" alt="forum icon 2">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/2/" title="Announcements"><strong>Announcements</strong></a></div>
            <div class="hidden-xs"><em>Get the latest news and announcements about <strong>eeBootstrap</strong>, including new releases and development updates.</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">10</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">0</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewannounce/70_2/">eeBootstrap theme 1.0.4 Released. </a><br>
                <i class="fa fa-clock-o"></i> 04-05-2015 10:10<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/1/">eeBootstrap Support Team</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_3.png" alt="forum icon 3">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/3/" title="Pre-Sales Questions"><strong>Pre-Sales Questions</strong></a></div>
            <div class="hidden-xs"><em>If you are investigating <strong>eeBootstrap</strong> as a solution for your needs and have some questions, please post them here.</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">10</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">18</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/77/">Actual steps to upgrade eebootstrap from EE2 to EE3</a><br>
                <i class="fa fa-clock-o"></i> 11-11-2015 11:47<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/1/">eeBootstrap Support Team</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_7.png" alt="forum icon 7">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/7/" title="Bug Reports"><strong>Bug Reports</strong></a></div>
            <div class="hidden-xs"><em>If you find an error or something that looks out of place in <strong>eeBootstrap</strong>, please let us know here. A developer will look into your report as soon as possible.</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">1</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">0</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/6/">Before Reporting...</a><br>
                <i class="fa fa-clock-o"></i> 02-11-2014 11:18<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/1/">eeBootstrap Support Team</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_8.png" alt="forum icon 8">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/8/" title="Resolved Bug Reports"><strong>Resolved Bug Reports</strong></a></div>
            <div class="hidden-xs"><em>Bugs are moved here after they have been handled in the Open <a href="http://www.eebootstrap.com/forum/viewforum/7/" title="Bug Reports">Bug Reports</a> forum.</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">7</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">15</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/79/">[Not a Bug] {if pm_enabled} not evaluated</a><br>
                <i class="fa fa-clock-o"></i> 24-12-2015 00:50<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/126/">Nathan Pitman</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_9.png" alt="forum icon 9">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/9/" title="Installation and Upgrade Support"><strong>Installation and Upgrade Support</strong></a></div>
            <div class="hidden-xs"><em>If you have problems or enquiries relating to <strong>eeBootstrap</strong> installation and upgrades, please post them here.</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">20</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">36</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/63/">Question about prefix</a><br>
                <i class="fa fa-clock-o"></i> 18-11-2014 17:53<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/10/">Petri Kosunen</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_11.png" alt="forum icon 11">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/11/" title="Tips &amp; Tricks"><strong>Tips &amp; Tricks</strong></a></div>
            <div class="hidden-xs"><em>Learn tips and tricks from other customer service professionals like you. And share your own tips! </em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">13</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">37</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/71/">Redirect to login form if a guest member - Redirect returns plain text.</a><br>
                <i class="fa fa-clock-o"></i> 19-05-2015 12:49<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/55/">Harry Richardson 1</a>

            </div>
          </td>
        </tr><tr>
          <!-- Forum Icon Based On Forum ID -->
          <td class="hidden-xs">
            <div class="show-forum-icon show">
              <img src="http://www.eebootstrap.com/themes/forum_themes/eebootstrap/images/forum_icons/forum_icon_10.png" alt="forum icon 10">
            </div>
          </td>

          <td class="hidden-xs topic-marker-forum">
            <i class="fa fa-bell-o"></i>
          </td>

          <td class="col-md-6 col-sm-6">
            <div><a href="http://www.eebootstrap.com/forum/viewforum/10/" title="Test Messages"><strong>Test Messages</strong></a></div>
            <div class="hidden-xs"><em>View the features of the <strong>eeBootstrap</strong> theme</em></div>

          </td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">10</span></td>

          <td class="col-md-1 col-sm-1 text-right"><span class="badge">16</span></td>

          <td class="col-md-4 col-sm-4 hidden-xs">
            <div>

                <a href="http://www.eebootstrap.com/forum/viewthread/54/">Thread with SoundCloud Track embedded</a><br>
                <i class="fa fa-clock-o"></i> 12-11-2014 08:23<br>
                <i class="fa fa-user"></i> <a href="http://www.eebootstrap.com/forum/member/1/">eeBootstrap Support Team</a>

            </div>
          </td>
        </tr></tbody><tbody>
        </tbody></table>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
    </div>
</main>
@endsection
