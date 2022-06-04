<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div>
        <a href="{{url('audittrail')}}">Back to home</a>
        
        <form action="{{route('audittrail.store')}}" method="POST">
            
            {{@csrf_field()}}
            <div>
                <label for="name"> Name: </label>
                <input type="text" name="name" id="name" value="{{old('name')}}" required > <br>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="ip"> ip: </label>
                <input type="text" name="ip" id="ip" value="{{old('ip')}}" required > <br>
                @error('ip')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="action_type"> Action type: </label>
                <input type="text" name="action_type" id="action_type" value="{{old('action_type')}}" required > <br>
                @error('action_type')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- <div>
                <label for="action_datetime"> Action datetime: </label>
                <input type="text" name="action_datetime" id="action_datetime" value="{{old('action_datetime')}}" required > <br>
                @error('action_datetime')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div> --}}

            <div>
                <label for="path_name"> Path name: </label>
                <input type="text" name="path_name" id="path_name" value="{{old('path_name')}}" required > <br>
                @error('path_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="query_details"> Query Details: </label>
                <input type="Text" name="query_details" id="query_details" value="{{old('query_details')}}" required > <br>
                @error('query_details')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        
        </form>
    </div>
</body>
</html>