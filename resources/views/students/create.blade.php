<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Students</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgb(73, 139, 187);
        }

    </style>
</head>
<body>

        <h1>Create a Student</h1>
        <div class="container">
    <form action="{{route('student.store')}}" method="post">
        @csrf
        @method('post')
    <input type="text" name="name" placeholder="Student Name">
    <input type="text" name="email" placeholder="Student email">
    <input type="text" name="age" placeholder="Student age">
    <input type="submit" value="Create Student">
    </form>
    </div>
    
</body>
</html>