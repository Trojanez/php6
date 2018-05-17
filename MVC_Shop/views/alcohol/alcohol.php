<?php require_once(ROOT . '/views/layouts/header.php'); ?>
<div id="main">
	<div class="layout">
		<h2>Алкогольные напитки</h2>
		<div class="alcohol_products">
			<?php foreach ($categories as $key => $value): ?>
			<div class="<?php echo $value['image'];?>">
				<img src="/template/images/<?php echo $value['image'];?>.jpg">
				<div class="<?php echo $value['image'];?>_name">
					<p><a href="/category-alcohol/<?php echo $value['category_name']; ?>/"><?php echo $value['name'];?></a></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php require_once(ROOT . '/views/layouts/footer.php'); ?>