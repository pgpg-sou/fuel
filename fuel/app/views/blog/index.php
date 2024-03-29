<h2>Listing <span class='muted'>Blogs</span></h2>
<br>
<?php if ($blogs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Tags</th>
			<th>Created at</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($blogs as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->body; ?></td>
			<td><?php echo $item->tags; ?></td>
			<td><?php echo $item->created_at; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('blog/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('blog/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('blog/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Blogs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('blog/create', 'Add new Blog', array('class' => 'btn btn-success')); ?>

</p>
