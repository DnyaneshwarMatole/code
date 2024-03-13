@include('pages.header')
    <title>Registration Form</title>
</head>
<body>
   
    <form action="/thankyou">
        <h1>Registration Form</h1>
        <p>All fields are mandatory</p>
        
        <label for="name">Name:</label>
        <input id="name" type="text" name="username" value="" placeholder="Enter Name" required><br>

        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="" placeholder="Enter Email" required><br>

        <label for="name">Age:</label>
        <input id="age" type="text" name="age" value="" placeholder="Enter Age" required><br>

        <h2>Are you interested in Dating</h2>
        <label for="yes">Yes</label>
        <input id="yes" type="radio" name="dating" value="yes">
        <label for="no">No</label>
        <input id="no" type="radio" name="dating" value="no"><br>
        <h3>Your Expection Like:</h3>
        <select name="expectation" id="">
            <option value="katrina">Katarina Kaif</option>
            <option value="Mallika">Mallika</option>
            <option value="sunny">Sunny Leone</option>
            <option value="karina">Kareena Kapoor</option>
        </select><br>
        <h3>How Many Marriages You Want:</h3>
        <select name="noOfMarriages" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <h3>Are you heavy alcoholic</h3>
        <input type="checkbox" name="register" value="yes">Yes
        <input type="checkbox" name="register" value="no">No
        <input type="checkbox" name="register" value="week">Only Weekend <br>
        <h3>Your Preferences and extra information</h3>
        <textarea name="extrainfo" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="register" value="raegister">

    </form>
    @include('pages.footer')