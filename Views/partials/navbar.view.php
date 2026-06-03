<nav>
        <a href="/">Home</a>
        <a href="contact">Contacto</a>
        <a href="about">Nosotros</a>
        <a href="services">Servicios</a>
        <?php if(Auth::check()): ?>
                <span><?= $_SESSION['name'] ?></span>
                <form style="display: inline;" action="/logout" method="POST">
                        <button style="margin-left: 10px">Salir</button>

                </form>
                

        <?php endif?>

</nav>