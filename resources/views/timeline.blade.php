<html>
<head>
    <title>اشتراک تصاویر</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

</head>
<body>
<a href="/newpost" class="btn btn-primary btn-lg" style="position: fixed;left:50px;top: 5px;">پست جدید</a>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 bg-primary">
            <h1 class="text-center">پروژه اشتراک تصاویر</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-md-2">

        </div>
        <div class="col-md-8 bg-success">
            @foreach($posts as $post)
                <div class="item">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                        <span>
                            <img style="width: 25px" src="{{asset('images/user.png')}}">
                        </span>
                                {{$post->full_name}}
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 " style="margin-bottom: 20px;">
                            <img style="display: block;margin-left: auto;margin-right: auto;min-width: 75%;max-width: 85%;" src="{{$post->url}}">
                        </div>
                        <div class="col-md-12">
                            @if(count($user_likes->where('post_id',$post->id))==0)
                                <a href="/like/{{$post->id}}">
                                    <i class="text-danger fa fa-heart-o" style="font-size: x-large;cursor: pointer"></i>
                                </a>
                            @else
                                <a href="/dislike/{{$post->id}}">
                                    <i class="text-danger fa fa-heart" style="font-size: x-large;cursor: pointer"></i>
                                </a>
                            @endif
                            {{count($post->likes)}}
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-right">{{$post->full_name}}</h4>
                            <p class="text-right">
                                {{$post->caption}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h4 class="text-right">
                                    نظرات
                                    ({{count($post->comments)}})
                                </h4><br>
                                @foreach($post->comments as $comment)
                                    <p class="text-right">
                                        <span style="font-weight: bold;font-size: larger;">{{$comment->full_name==''?'بدون نام':$comment->full_name}} : </span>
                                        {{$comment->text}}
                                    </p>
                                    <hr>
                                @endforeach
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form style="direction: rtl" action="/comment" method="post">
                                @csrf
                                <input hidden name="post_id" value="1">
                                <input class="form-control" name="full_name" placeholder="نام کامل خود را وارد کنید">
                                <br>
                                <input class="form-control" type="text" name="text" placeholder="متن نظر خود را وارد کنید">
                                <br>
                                <button class="right btn btn-success" type="submit">ثبت نظر</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
