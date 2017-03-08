<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        {{var_dump($categories)}}
        @foreach($categories as $category)
        {{$category->name}}<br/>
        
        @endforeach
    </body>
</html>