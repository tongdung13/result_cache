<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Test</h1>
        <hr>
        <form action="{{ route('getMax.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="" />
            </div>
            <div class="form-group">
                <label for="">Max</label>
                <input type="text" name="max" class="form-control" value="{{ old('max') }}" id="" />
            </div>
            <div class="form-group">
                <label for="">Job</label>
                <input type="file" name="job" class="form-control-file" value="{{ old('job') }}" id="" />
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Sub mit</button>
        </form>
    </div>
</body>
</html>
