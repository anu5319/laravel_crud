<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Custom CSS for session message */
        .alert {
            margin-bottom: 10px;
        }

        /* Custom CSS for Pagination */
        .pagination .page-link {
            font-size: 14px; /* Adjust the font size as per your preference */
        }
    </style>
</head>
<body>
    Name : {{session()->get('first_name')}}
Student_id:{{session()->get('student_id')}}
@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
    @endif


    <!-- Add student button -->
    <a href="{{ route('student.create') }}" class="btn btn-primary">ADD</a>

    <!-- Student table -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Qualification</th> <!-- Corrected spelling -->
                <th>Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->qualifications }}</td>
                    <td>{{ count($student->orders) }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>   
                        <a href="{{ route('student.show', $student->id) }}" class="btn btn-success">View</a>
                    </td>                  
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="alert alert-success" role="alert">
        Student added successfully!
    </div>
    <a href="/student/create" class="btn btn-primary">ADD</a>
    <table class="table">
        <!-- Student table content -->
    </table>
    <!-- Pagination links -->
    <!-- Pagination links content -->
    
    <!-- Pagination links -->
    {!! $students->links() !!}
</body>
</html>
