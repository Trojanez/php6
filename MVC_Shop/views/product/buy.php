<?php include ROOT . '/views/layouts/header.php';?>
            <div id="main">
                <div class="layout">
                    <div class="goods">
                        <div class="refer_main">
                            <a class="refer" href="/category-alcohol/">Алкогольные напитки</a> &#8250 <a class="refer" href="/category-alcohol/<?php echo $productId['category_name']; ?>">Водка</a> &#8250 <span class="refer_name"><?php echo $productId['title'];?></span>
                        </div>
                        <h2><?php echo $productId['title'];?></h2>
                        <p class="code">Код товару: <?php echo $productId['code']; ?></p>
                        <hr>
                        <div class="img_holder">
                            <img src="/template/images/<?php echo $productId['image'] ?>.jpg">
                        </div>
                        <div class="product_info">
                            <p class="price">Цiна: <?php echo number_format($productId['price'], 2, ',', '.');; ?> грн.</p>
                            <a href="/cart" class="buy">В корзину</a>
                            <div class="qty_wrapper">
                                <a class="decrease_qty">
                                    <img src="/template/images/minus.png">
                                </a>
                                <input type="text" value="1" step="1">
                                <a class="increase_qty">
                                    <img src="/template/images/plus.png">
                                </a> 
                            </div>
                            <?php if($productId['availability'] == 1): ?>
                                <p class="availability_true">Есть на складе</p>
                                <?php else: ?>
                                <p class="availability_false">Товар отсутствует</p>
                            <?php endif; ?>
                            <hr class="middle_line">
                            <div class="description">
                                <p class="producer">Торгова Марка <span>"<?php echo $productId['producer']; ?>"</span></p>
                                <p class="volume">Об'єм <span><?php echo number_format($productId['volume'], 1, ',', '.'); ?> л.</span></p>
                                <p class="strength">Міцність <span><?php echo number_format($productId['strength'], 1, ',', '.'); ?> %</span></p>
                                <p class="country">Країна <span><?php echo $productId['country']; ?></span></p>
                            </div>
                            <div class="waranty">
                                <img src="/template/images/18year.png">
                                <p>Придбати алкогольні напої можуть особи, які досягли 18 років. Надмірне вживання алкоголю шкодить вашому здоров'ю.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once ROOT . '/views/layouts/footer.php';?>