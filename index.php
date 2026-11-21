<?php

require_once "includes/header.php";
?>


<main>
    <section id="hero" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <p class="eyebrow">Zoo de Lisboa</p>
            <h1>A natureza está mais perto do que imaginas.</h1>
            <p class="hero-text">Descobre espécies extraordinárias, histórias de conservação e momentos para recordar em família.</p>
            <div class="hero-actions">
                <a href="bilhetes.php" class="button button-primary">Planear a visita <i class="fa-solid fa-arrow-right"></i></a>
                <a href="animais.php" class="button button-ghost">Conhecer os animais</a>
            </div>
        </div>
    </section>

    <section id="animaisDestaque" class="featured-section">
        <div class="section-heading">
            <div>
                <p class="eyebrow dark">Encontrarás no Zoo</p>
                <h2>Animais em destaque</h2>
            </div>
            <a href="animais.php" class="text-link">Ver todos os animais <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="animals-grid">
            <article class="animal-card">
                <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?auto=format&fit=crop&w=1200&q=85" alt="Panda gigante a comer">
                <div class="animal-card-content">
                    <span>Mamífero</span>
                    <h3>Panda gigante</h3>
                </div>
            </article>
            <article class="animal-card">
                <img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=1200&q=85" alt="Leão na savana">
                <div class="animal-card-content">
                    <span>Mamífero</span>
                    <h3>Leão</h3>
                </div>
            </article>
            <article class="animal-card">
                <img src="https://images.unsplash.com/photo-1557409518-691f9c6b1dc0?auto=format&fit=crop&w=1200&q=85" alt="Ave exótica colorida">
                <div class="animal-card-content">
                    <span>Ave</span>
                    <h3>Arara-vermelha</h3>
                </div>
            </article>
        </div>
    </section>

    <section class="experience-section">
        <div class="experience-image">
            <img src="https://images.unsplash.com/photo-1540573133985-87b6da6d54a9?auto=format&fit=crop&w=1400&q=85" alt="Primata a descansar num ambiente natural">
        </div>
        <div class="experience-content">
            <p class="eyebrow dark">Uma visita com propósito</p>
            <h2>Mais do que um passeio.</h2>
            <p>Cada visita ajuda a aproximar pessoas da natureza e a apoiar projetos que protegem espécies em todo o mundo.</p>
            <ul class="experience-list">
                <li><i class="fa-solid fa-check"></i><span><strong>Bem-estar em primeiro lugar</strong><small>Espaços preparados com conforto e enriquecimento para os animais.</small></span></li>
                <li><i class="fa-solid fa-check"></i><span><strong>Aprender fazendo</strong><small>Atividades, alimentação pública e experiências pensadas para todas as idades.</small></span></li>
                <li><i class="fa-solid fa-check"></i><span><strong>Conservação real</strong><small>Participamos em programas de proteção e educação ambiental.</small></span></li>
            </ul>
            <a href="sobre.php" class="button button-dark">Conhecer o Zoo <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <section class="visit-section">
        <div class="visit-inner">
            <div>
                <p class="eyebrow">Pronto para a aventura?</p>
                <h2>O melhor dia começa aqui.</h2>
            </div>
            <div class="visit-actions">
                <a href="horarios.php" class="visit-link"><i class="fa-regular fa-clock"></i><span><small>Horário hoje</small><strong>10:00 — 18:00</strong></span></a>
                <a href="localizacao.php" class="visit-link"><i class="fa-solid fa-location-dot"></i><span><small>Localização</small><strong>Lisboa, Portugal</strong></span></a>
                <a href="bilhetes.php" class="button button-primary">Comprar bilhetes <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
</main>
<?php
require_once "includes/end.php";
?>