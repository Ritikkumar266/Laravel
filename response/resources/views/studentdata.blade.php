<!DOCTYPE html>
<html>
<head>
    <title>Result Dashboard</title>

    <!-- Bootstrap -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">B.Tech Result 2025</h2>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <!-- <th>ID</th>
                <th>Registration No</th>
                <th>Name</th>
                <th>Course</th>
                <th>Marks</th> -->
                <th>Name</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>

        @foreach($students as $student)

            

    <tr>
        <!-- <td>{{ $student->ID }}</td>
        <td>{{ $student['Reg_No.'] }}</td>
        <td>{{ $student->Name }}</td>
        <td>{{ $student->Course }}</td>
        <td>{{ $student->Marks }}</td> -->
        <td>{{ $student->Name }}</td>
        <td>{{ $student->Marks }}</td>

    </tr>
        @endforeach

        </tbody>
    </table>

</div>

</body>
</html>