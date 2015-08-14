<style>
    .blog {
	padding-top: 2%;
	padding-bottom: 2%;
	margin-bottom: 2%;
	border-bottom: 2px solid lightgray;
    }
</style>

<div class="row">
    <div class="col-lg-12">
	<h2><strong><?php echo $title ?></strong></h2>
    </div>
</div>

<?php foreach ($blogs as $blogs_item): ?>
<div class="row blog">
    <div class="col-lg-1 text-right">
	<p><strong><?php echo $blogs_item['title'] ?></strong></p>
    </div>	

    <div class="col-lg-11">
	<?php echo $blogs_item['text'] ?>
    </div>
</div>
<?php endforeach ?>
