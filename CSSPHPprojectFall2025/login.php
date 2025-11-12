<?php $pageTitle = "Login / Register"; include 'includes/header.php'; ?>
<main class="auth-main">
    <section class="auth-container">
        <div class="form-box">
            <h2>Login</h2>
            <form method="post" action="process_login.php"> <!-- Not created yet -->
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="form-box">
            <h2>Register</h2>
            <form method="post" action="process_register.php"> <!-- Not created yet -->
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Register</button>
            </form>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
