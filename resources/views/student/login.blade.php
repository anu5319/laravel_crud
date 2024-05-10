<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"],
        a.btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        button[type="submit"] {
            background-color: #007bff;
        }

        a.btn {
            background-color: #6c757d;
        }

        a.btn:hover,
        button[type="submit"]:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <form method="post" action="{{ route('student.store') }}">  
        @csrf 
        <div class="form-group">      
            <label for="first_name">Name:</label><br/><br/>  
            <input type="text" class="form-control" name="first_name"/><br/><br/>  
        </div> 
        <div class="form-group">      
            <label for="first_name">Password:</label><br/><br/>  
            <input type="password" class="form-control" name="password"/><br/><br/>  
        </div> 
                                        
        <a href="{{ route('student.index') }}" class="btn btn-primary">Login</a>
        <button type="submit" class="btn">Back</button>
    </form>
</body>
</html>
