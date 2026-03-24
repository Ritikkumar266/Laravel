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
                <th>Name</th>
                <th>Registration No</th>
                <th>CGPA</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

        @foreach($students as $student)

            

       <tr style="background-color: {{ $student['cgpa'] >= 5 ? 'lightgreen' : 'lightcoral' }};">
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['reg'] }}</td>
            <td>{{ $student['cgpa'] }}</td>
            <td>
                {{ $student['cgpa'] >= 5 ? 'Pass' : 'Fail' }}
            </td>
       </tr>

        @endforeach

        </tbody>
    </table>

</div>

</body>
</html>