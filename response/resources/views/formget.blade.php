<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <h1>Student Registration Form</h1> 
    <!-- @if($errors->any())
    {{ $errors }}
    @endif -->
    <!-- @foreach($errors->all() as $err)
        <span style="color:red">{{ $err }}</span><br>
    @endforeach -->
    <form action="/submitformget" method="get">
        @csrf
        <!-- cross-site request forgery used to secure /prevent form data -->
        <label for="username">User Name:</label><br>
        <input type="text" id="uname" name="username" placeholder="Enter your Username" required><br>
        <span style="color:red">
            @error('username')
            {{ $message }}
            @enderror
        </span><br>


        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

        <label for="regno">Registration Number:</label><br>
        <input type="text" id="regno" name="regno" placeholder="Enter your registration number" required><br><br>

        <label for="email">Mail :</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your mail ID" required><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <button type="submit">Submit</button>
        
    </form>
</div>
</body>