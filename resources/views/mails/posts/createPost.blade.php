<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        body{
            background-color: lightgoldenrodyellow;
            color: rgb(39, 37, 37)
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Questa mail è stata generata alla creazione del post</h1>
    <h4>Il post da te generato è {{ $post->title }}</h4>
    <p> Il testo è {{ $post->body }}</p>
    <p>
        le categorie sono : {{ $post->category->name }}
    </p>
    <ul>
        @foreach ($post->tags as $elem)
            <li> {{ $elem->name }} </li>
        @endforeach
    </ul>

</body>
</html>