<div>
    
    <form action="/submitformget" method="get">
        @csrf
        <!-- cross-site request forgery used to secure /prevent form data -->
        <label for="username">User Name:</label><br>
        <input type="text" id="name" name="username" placeholder="Enter your name" required><br><br>
        
        <label for="regno">Registration Number:</label><br>
        <input type="text" id="regno" name="regno" placeholder="Enter your registration number" required><br><br>

        <label for="email">Mail :</label><br>
        <input type="email" id="email" name="mail" placeholder="Enter your mail ID" required><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <button type="submit">Submit</button>
        
    </form>
</div>