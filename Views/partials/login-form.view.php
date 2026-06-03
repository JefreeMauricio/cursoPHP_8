<?php require 'Views/partials/head.view.php'; ?>


    <h1>Iniciar sesion</h1>

    <?php if (!empty($_SESSION['error'])) : ?>
        <div style="color: red; margin-bottom: 10px;">
            <?= htmlspecialchars($_SESSION['error']) ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    
    <form action="/login" method="POST">
        <div>
            <input style="margin-top:10px" type="text" name="email" placeholder="Ingresa tu email" required>
        </div>
        <div>
            <input style="margin-top:10px" type="password" name="password" placeholder="Ingresa tu contraseña" required>
        </div>
         <div>
            <button style="margin-top: 10px" type="submit">Entrar</button>
        </div>
        
    </form>

<?php require 'Views/partials/footer.view.php'; ?>

