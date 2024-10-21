<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Creating DocuSign contract</title>
</head>
    <body>
    <div class="container my-5">
        <div class="mx-auto" style="width: 600px;">
            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('contract') }}">
                @csrf
                <div class="my-3">
                    <label class="form-label" for="inputName">Signer Name:</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="inputName"
                        class="form-control @error('name') is-invalid @enderror" 
                        placeholder="Name..">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label class="form-label" for="inputEmail">Signer Email:</label>
                    <input 
                        type="text" 
                        name="email" 
                        id="inputEmail"
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Email..">  
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @endif
                </div>
                <div class="my-3">
                    <label for="formFile" class="form-label">Upload contract doc, docx or pdf</label>
                    <input class="form-control" type="file" id="formFile" name="formFile">
                    <p class="mt-1"><em>Make sure to place **signature** anywhere in your document where you need your recipient to sign</em></p>
                    @error('formFile')
                        <span class="text-danger">{{ $message }}</span>
                    @endif
                </div>
                <div class="my-5">
                    <button class="btn btn-success btn-submit">Submit</button>
                </div>
        </form>
        </div>
    </div>
    </body>
</html>
