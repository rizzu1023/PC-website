@extends('layout.base')
@include('layout.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG</title>
</head>
<body>

    <body>
      
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>

                             
                            
                                <li class="header-icon dib"><span class="user-avatar">John <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                   
                                        <div class="dropdown-content-body">
                                            <ul>
     
                                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <a class="btn btn-sm btn-success" href="/admin/blog">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add Article</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form  method ="POST" action="/admin/blog/edit/{{$blog->id}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" value="{{$blog->title}}" class="form-control input-default "  name="title" placeholder="Title" required >
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{$blog->desc}}" class="form-control input-default "  name="desc" placeholder="Description" required >
                                        </div>


                                        <div class="form-group">
                                            <input type="text" value="{{$blog->body}}" class="form-control input-default "  name="body" placeholder="Body" required >
                                        
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image</p>
                                            <input type="file" class="form-control input-default" value="{{$blog->image}}" name="img" >
                                        </div>
                                        </div>
                                        <!-- /# card -->
                                    </div>
                                    <!-- /# column -->
                                </div>

                                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>  
            </div>
        </div>
</body>
</html>
@endsection