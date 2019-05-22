<style>
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */

</style>
<form action="<?php echo base_url('Welcome/checkLogin') ?>" method="post">
  <div class="imgcontainer">
    <img src="<?php echo base_url() ?>assets/img/logos.png" alt="Avatar" class="avatar">
  </div>
  <div class="container col-4">
  </div>
  <div class="container col-3">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="id" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <button type="submit">Login</button>
  </div>
</form>