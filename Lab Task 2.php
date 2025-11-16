<!DOCTYPE html>
<head>
    <center>
          <title1>Participant Registration</title1>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #003366;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 50px;
      text-align: center;
      font-size: 16px;
      color: #06f00eff;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
    </center>
</head>
<body>
     
  <h2>Participant Registration</h2>
 
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="email" />
 
    <label>Phone Number:</label>
    <input type="number" id="phone" />

    <label>Password:</label>
    <input type="password" id="password" />

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword" />

     <button type="submit">Submit</button>


      
 
  </form>


    <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var phone = document.getElementById("phone").value.trim();
      var password = document.getElementById("password").value.trim();
      var confirmPassword = document.getElementById("confirmPassword").value.trim();
 
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";

 
      if (name === "" || email === "" || phone === "" || password === "" || confirmPassword === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }

      if (!email.includes('@'))
      {
        errorDiv.innerHTML = " The Email address should be valid! ";
        return false;
      }
 
 
      if (password != confirmPassword) {
        errorDiv.innerHTML = " Password and Confirm Password Do not match.";
        return false;
      }


 
      outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Full Name: ${name}<br>
        Email: ${email}<br>
        Phone Number: ${phone}<br>

      `;

 
      return false;
    }
  </script>


</body>

</html>

