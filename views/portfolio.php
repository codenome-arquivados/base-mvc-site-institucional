<div class="home-portfolio">
    <h4>Todos os porfolios</h4>
    <?php foreach ($portfolio as $item): ?>
        <div class="portfolio-item">
            <img src="assets/portfolio/<?php echo $item['imagem']; ?>" alt="" border="0" width="200">
        </div>
    <?php endforeach; ?>
</div>