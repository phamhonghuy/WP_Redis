<?php
$car = $args;
$image = get_the_post_thumbnail_url($car->ID);
//get price by id
$price = get_post_meta($car->ID, '_regular_price', true);
setlocale(LC_MONETARY,"vi_VN");
$price = number_format($price);
// echo '<pre>'; var_dump($car); die('---DEBUG HERE---');
?>
<article class="portfolio-item col-12 col-sm-6 col-md-4 cf-sedan">
    <div class="grid-inner">
        <div class="portfolio-image">
            <a href="<?=$car->guid?>">
                <img src="<?=$image?>" alt="Open Imagination">
                <div class="filter-p-pricing">
                    <span class="p-price fw-bold ls-1"><?=$price?> VNĐ</span>
                    <span class="p-price-msrp">MSRP : <strong><?=$price?> VNĐ</strong></span>
                </div>
            </a>
        </div>
        <div class="portfolio-desc">
            <h3><a href="<?=$car->guid?>"><?=$car->post_title?></a></h3>
            <span><?=$car->post_content?></span>
        </div>
        <div class="row g-0 car-p-features font-primary">
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span></div>
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
            <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
        </div>
    </div>
</article>