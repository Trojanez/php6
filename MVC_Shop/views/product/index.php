<?php require_once ROOT . '/views/layouts/header.php';?>
		<div id="main">
            <div class="layout">
                <a class="refer" href="/category-alcohol/">Алкогольные напитки</a> &#8250 
                <?php foreach ($categories as $value): ?>
                    <span class="refer_name"><?php if($value['category_name'] === $categoryName) echo $value['name']; ?></span>
                <?php endforeach; ?>
                <div class="product">
                    <?php foreach($categoryProduct as $key => $productItem): ?>
                <ul class="product_items">
                    <li>
                        <img src="/template/images/<?php echo $productItem['image'];?>.jpg"/><br/>
                        <a href="/category-alcohol/<?php echo $productItem['category_name']; ?>/<?php echo $productItem['code'];?>"><?php echo $productItem['title'] ?></a>
                        <div class="price">
                        <span>Цена: <?php echo number_format($productItem['price'], 2, ',', '.');?> грн</span>
                        <form method="post" action="/category-alcohol/<?php echo $productItem['category_name']; ?>/<?php echo $productItem['code'];?>">
                        <input type="submit" value="Купить"/>
                        </form>
                        </div>
                    </li>
                </ul>
                <?php endforeach ?>

                <?php echo $pagination->get(); ?>
                </div>
            </div>
		</div>
		<?php require_once ROOT . '/views/layouts/footer.php';?>
	</div>
</body>
</html>