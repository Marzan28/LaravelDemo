<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Students</title>
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
            background: rgba(255, 54, 94, 0.393);
        }
    </style>
</head>
<body>

    <h1>Students</h1>
    <div>
        <table border ="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>Age</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
            </tr>
            @endforeach
        </table>
    </div>    
</body>
</html>