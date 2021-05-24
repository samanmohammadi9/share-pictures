<html>
<head>
    <title>اشتراک تصاویر</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

</head>
<body>
<a href="/" class="btn btn-primary btn-lg" style="position: fixed;left:15px;top: 5px;">بازگشت به صفحه اصلی</a>
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
            <form method="post" enctype="multipart/form-data" >
                @csrf
                <br>
                <input class="form-control" name="full_name" placeholder="نام و نام خانوادگی"><br>
                <input class="form-control" name="caption" placeholder="متن پست را بنویسید"><br>
                <input class="form-control" type="file" name="pic"><br>
                <button class="btn btn-block btn-success">
                    ذخیره پست
                </button>
            </form>
        </div>
    </div>
</body>
</html>
