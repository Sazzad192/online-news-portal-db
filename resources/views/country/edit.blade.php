<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('country.update', $comCountries->country_id)}}" method="POST">
        
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div>
            <label for="cname"> Country Name: </label>
            <input type="text" name="country_name" id="cname" value="{{$comCountries->country_name}}" required > <br>
        </div>

        <div>
            <label for="cnamebn"> Country Name Bangla: </label>
            <input type="text" name="country_name_bn" id="cnamebn" value="{{$comCountries->country_name_bn}}" required > <br>
            
        </div>

        <div>
            <label for="cslug"> Country Slug: </label>
            <input type="text" name="country_slug" id="cslug" value="{{$comCountries->country_slug}}" required > <br>
            
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </form>
</body>
</html>