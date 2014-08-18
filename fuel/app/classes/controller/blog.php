<?php
class Controller_Blog extends Controller_Template
{

	public function action_index()
	{
		$data['blogs'] = Model_Blog::find('all');
		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('blog');

		if ( ! $data['blog'] = Model_Blog::find($id))
		{
			Session::set_flash('error', 'Could not find blog #'.$id);
			Response::redirect('blog');
		}

		$this->template->title = "Blog";
		$this->template->content = View::forge('blog/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Blog::validate('create');

			if ($val->run())
			{
				$blog = Model_Blog::forge(array(
					'title' => Input::post('title'),
					'body' => Input::post('body'),
					'tags' => Input::post('tags'),
					'created_at' => Input::post('created_at'),
				));

				if ($blog and $blog->save())
				{
					Session::set_flash('success', 'Added blog #'.$blog->id.'.');

					Response::redirect('blog');
				}

				else
				{
					Session::set_flash('error', 'Could not save blog.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('blog');

		if ( ! $blog = Model_Blog::find($id))
		{
			Session::set_flash('error', 'Could not find blog #'.$id);
			Response::redirect('blog');
		}

		$val = Model_Blog::validate('edit');

		if ($val->run())
		{
			$blog->title = Input::post('title');
			$blog->body = Input::post('body');
			$blog->tags = Input::post('tags');
			$blog->created_at = Input::post('created_at');

			if ($blog->save())
			{
				Session::set_flash('success', 'Updated blog #' . $id);

				Response::redirect('blog');
			}

			else
			{
				Session::set_flash('error', 'Could not update blog #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$blog->title = $val->validated('title');
				$blog->body = $val->validated('body');
				$blog->tags = $val->validated('tags');
				$blog->created_at = $val->validated('created_at');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('blog', $blog, false);
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('blog');

		if ($blog = Model_Blog::find($id))
		{
			$blog->delete();

			Session::set_flash('success', 'Deleted blog #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete blog #'.$id);
		}

		Response::redirect('blog');

	}

}
