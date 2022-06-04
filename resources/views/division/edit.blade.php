<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('division.update', $comdivisions->division_id)}}" method="POST">
        
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div>
            <label for="division_name"> Division Name: </label>
            <input type="text" name="division_name" id="division_name" value="{{$comdivisions->division_name}}" required > <br>
            @error('division_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="division_name_bn"> Division name bangla: </label>
            <input type="text" name="division_name_bn" id="division_name_bn" value="{{$comdivisions->division_name_bn}}" required > <br>
            @error('division_name_bn')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="division_slug"> Division Slug: </label>
            <input type="text" name="division_slug" id="division_slug" value="{{$comdivisions->division_slug}}" required > <br>
            @error('division_slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="division_title"> Division Title </label>
            <input type="text" name="division_title" id="division_title" value="{{$comdivisions->division_title}}" required > <br>
            @error('division_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="meta_description"> Meta Description: </label>
            <input type="text" name="meta_description" id="meta_description" value="{{$comdivisions->meta_description}}" required > <br>
            @error('meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
</body>
</html>