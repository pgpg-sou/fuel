<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($blog) ? $blog->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body', array('class'=>'control-label')); ?>

				<?php echo Form::input('body', Input::post('body', isset($blog) ? $blog->body : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Body')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tags', 'tags', array('class'=>'control-label')); ?>

				<?php echo Form::input('tags', Input::post('tags', isset($blog) ? $blog->tags : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tags')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Created at', 'created_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('created_at', Input::post('created_at', isset($blog) ? $blog->created_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Created at')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>