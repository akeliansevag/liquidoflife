<?php
$query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 6,
]);
$products = $query->posts;
?>
<section>
    <div class="container">
        <div class="flex">
            <h2 class="section-title">PRODUCTS</h2>

        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>