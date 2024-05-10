   
    <table class="table">
        <style>
    /* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th,
.table td {
    padding: 8px;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f2f2f2;
    text-align: left;
}

/* Button styling */
.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}

.btn-secondary {
    background-color: #6c757d;
}

.btn:hover {
    background-color: #0056b3;
}

.btn-secondary:hover {
    background-color: #495057;
}


</style>

<tr>
    <th>ID</th>
    <td>{{ $student->id }}</td>
</tr>
<tr>
    <th>First Name</th>
    <td>{{ $student->first_name }}</td>
</tr>
<tr>
    <th>Last Name</th>
    <td>{{ $student->last_name }}</td>
</tr>
<tr>
    <th>Gender</th>
    <td>{{ $student->gender }}</td>
</tr>
<tr>
    <th>Qualifications</th>
    <td>{{ $student->qualifications }}</td>
</tr>
<tr>
    <th>house_name</th>
    <td>{{ $student->address->house_name }}</td>
</tr>
<th>post</th>
    <td>{{ $student->address->post }}</td>
</tr>
<th>city</th>
    <td>{{ $student->address->city }}</td>
</tr>
<th>state</th>
    <td>{{ $student->address->state }}</td>
</tr>
       

        {{-- <th>hose_name</th>
            <td>{{ $student->house_name }}</td>
        </tr>
        <th>post</th>
            <td>{{ $student->post }}</td>
        </tr>
        <th>city</th>
            <td>{{ $student->city }}</td>
        </tr>

        <th>state</th>
            <td>{{ $student->state }}</td>
        </tr>

        <th>first_name</th>
            <td>{{ $student->student->first_name }}</td>
        </tr>
        <th>last_name</th>
            <td>{{ $student->student->last_name }}</td>
        </tr>

        <th>gender</th>
            <td>{{ $student->student->gender }}</td>
        </tr>

        <th>qualification</th>
            <td>{{ $student->student->qualifications }}</td>
        </tr> --}}

        @foreach($student->orders as $order)
<tr>
        <th>id</th>
            <td>{{$order->order_id}}</td>
        </tr>
        <tr>
        <th>price</th>
            <td>{{number_format($order->price,2)}}</td>
        </tr>
        <tr>
            <th>status</th>
                <td>{{$order->status_text}}</td>
            </tr>
        

        @endforeach


    </table>

    
    <a href="{{ route('student.index') }}" class="btn btn-secondary">Back to List</a>
</div>