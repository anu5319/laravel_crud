  
<html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <body>
        <style>
       

        form {
            max-width: 600px; 
            margin: 20px auto; 
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 10px; 
            background-color: green; 
        }

        .form-group {
            margin-bottom: 10px;       
         }

        label {
            font-weight: bold; 
            font-size: 1.1em;
        }

        input {
            width: 100%; 
            padding: 6px; 
            border: 1px solid #ccc; 
            border-radius: 5px;
        }

        input:focus {
            border-color: #007bff; 
            outline: none; 
        }

        button {
            background-color: blue; 
            color: white;
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: background-color 0.3s; 
            margin-bottom: 05px;
        }

        button:hover {
            background-color: #0056b3; 
        }

        body {
            font-family: Arial, sans-serif; 
            background-color: #f0f0f0; 
        }
        .btn {
            background-color: red; 
            color: white;
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: background-color 0.3s;
        }

    </style>
</head> 

<form method="post" action="{{route('student.update',$student->id)}}">  
   @csrf   
   @method('PUT') 
  
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}"/><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender" value="{{$student->gender}}"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications" value="{{$student->qualifications}}"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >EDIT</button>  
<a href="{{route('student.index')}}" class="btn btn-primary">BACK</a>
</form> 
</body>
</html>  