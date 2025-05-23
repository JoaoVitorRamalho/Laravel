<nav>

    <div>

        <a href="/">

            <h2>Home</h2>

        </a>

    </div>

    <div>

        <h2>Pessoas</h2>

        <ul>

            <li><a href="/pessoas">Lista</a></li>

            <li><a href="/pessoas/criar">Novo</a></li>

        </ul>

    </div>

    <div>

        <?php if(auth()->guard()->check()): ?>

            <h2>Olá, <?php echo e(Auth::user()->name); ?></h2>

            <a href="/logout">Logout</a>

        <?php else: ?>

            <a href="/login">Login</a>

        <?php endif; ?>

    </div>

</nav><?php /**PATH C:\Users\João Victor\Desktop\Web II\lavarel\resources\views/components/menu.blade.php ENDPATH**/ ?>