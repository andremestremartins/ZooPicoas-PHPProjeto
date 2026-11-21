<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-brand">
            <img src="./assets/images/logos/logoBranco.png" alt="Zoo de Picoas">
            <p>Espaço de descoberta, educação e conservação da natureza.</p>
        </div>
        <div class="footer-column">
            <h3>Visita</h3>
            <a href="bilhetes.php">Bilhetes</a>
            <a href="horarios.php">Horários</a>
            <a href="precos.php">Preços</a>
            <a href="localizacao.php">Como chegar</a>
        </div>
        <div class="footer-column">
            <h3>ZooPicoas</h3>
            <a href="sobre.php">Sobre nós</a>
            <a href="animais.php">Animais</a>
            <a href="conservacao.php">Conservação</a>
            <a href="contactos.php">Contactos</a>
        </div>
        <div class="footer-newsletter">
            <h3>Fica a par das novidades</h3>
            <form action="#" method="post">
                <label class="sr-only" for="footer-email">Email</label>
                <input id="footer-email" type="email" name="email" placeholder="O teu email">
                <button type="submit" aria-label="Subscrever"><i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> ZooPicoas. Todos os direitos reservados.</p>
        <div>
            <a href="#">Privacidade</a>
            <a href="#">Termos</a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</footer>
<script src="./public/js/script.js"></script>
</body>
</html>