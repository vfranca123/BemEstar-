
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Document</title>
</head>
<body>
    @if(session()->has('flash'))
        <div id="flash">
            <h1>{{session('flash')}}</h1>
        </div>
    @endif    
</body>
</html>
