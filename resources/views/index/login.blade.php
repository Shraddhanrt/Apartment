@include("index.navbar")

<div class="container login" style="background-color: rgb(182, 203, 211); height: 100vh; display: flex; justify-content: center; align-items: center;">
    <form class="login-form" style="background-color: white; padding: 20px; border-radius: 5px;">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button class="submit" type="submit">Login</button>
    </form>
</div>
