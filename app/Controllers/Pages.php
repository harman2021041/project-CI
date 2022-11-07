<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
   public function view($page = 'page1')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

       return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
            
    }
	//--------------------------------------------------------------------

}
