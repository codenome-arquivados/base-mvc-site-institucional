<div class="home-sobre">
    <img src="assets/portfolio/imagem1.jpg" alt="" border="0" width="150" height="150">
    <h4>Sobre</h4>
    <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando
        estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de
        letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um
        texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como
        texto-modelo padrão, e uma rápida busca por 'lorem ipsum'.</p>
</div>
<div class="home-portfolio">
    <h4>Meu Portfolio recente</h4>
    <?php foreach ($portfolio as $item): ?>
        <div class="portfolio-item">
            <img src="assets/portfolio/<?php echo $item['imagem']; ?>" alt="" border="0" width="200">
        </div>
    <?php endforeach; ?>
</div>