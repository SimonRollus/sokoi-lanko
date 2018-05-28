<link rel="stylesheet" href="styles/sign.css">
<form action="">
    <h1>Sign up</h1>
    <input type="text" name="username" id="username" class="incorrect-input" placeholder="Username" oninput="usernameCheck(this)">
    <br>
    <input type="email" name="email" id="email" placeholder="Email">
    <br>
    <input type="password" name="password" id="password" placeholder="Password">
    <br>
    <input type="password" name="password2" id="password2" placeholder="Please confirm your password">
    <br>
    <input type="submit" value="Sign up">
</form>
<script type="text/javascript" src="scripts/sign.js"></script>