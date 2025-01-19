<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel #30: Membuat Upload File Dengan Laravel</title>
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center my-5">Tutorial Laravel #30: Membuat Upload File Dengan Laravel</h2>
        <div class="col-lg-8 mx-auto my-5">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                    @endforeach
                </div>
            @endif

            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="file"><b>File Gambar</b></label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="keterangan"><b>Keterangan</b></label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>
