<?php
function renderHeader($title, $description, $className = '', $style = '', $children = '') {

    $defaultStyle = "background-image: url('assets/paginaInicial.jpg'); background-size: cover; background-position: center; clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);";
    $mergedStyle = $style ?: $defaultStyle; 
?>

<header class="header-container <?php echo $className; ?>" style="<?php echo $mergedStyle; ?>">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="title">
            <?php echo htmlspecialchars($title); ?>
        </h1>
        <p class="description">
            <?php echo htmlspecialchars($description); ?>
        </p>
    </div>
    <?php if (!empty($children)): ?>
    <div class="children-content"><?php echo $children; ?></div>
    <?php endif; ?>
</header>

<?php
}
?>