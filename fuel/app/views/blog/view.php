<h2>Viewing <span class='muted'>#<?php echo $blog->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $blog->title; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $blog->body; ?></p>
<p>
	<strong>Tags:</strong>
	<?php echo $blog->tags; ?></p>
<p>
	<strong>Created at:</strong>
	<?php echo $blog->created_at; ?></p>

<?php echo Html::anchor('blog/edit/'.$blog->id, 'Edit'); ?> |
<?php echo Html::anchor('blog', 'Back'); ?>