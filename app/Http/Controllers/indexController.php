<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;
use App\Portfolios;
use App\Social;
use App\Message;
use Log;
use App\Contact;
class indexController extends Controller
{
    public function index(){
        $messages = Message::all();
    	$info = Information::first();
        $portfolios = Portfolios::all();
    	return view('index', compact('info', 'portfolios', 'messages'));
    }


    public function adminView(){
        $messages = Message::all();
    	$info = Information::first();
        $title = "Dashboard";
        $menu = "dashboard";
    	return view('admin/dashboard', compact('info','title','menu', 'messages'));
    }

     public function viewProfile(){
        $messages = Message::all();

    	return view('admin/profile/view', compact('messages'));
    }

    public function editProfile(){
        $messages = Message::all();

    	return view('admin/profile/edit', compact('messages'));
    }

    public function setting(){
        $messages = Message::all();

    	$info = Information::first();
        $title = "settings";
        $menu = 'settings';
    	return view('admin/settings/view', compact('info','title','menu', 'messages'));
    }
	public function editSetting(){
            $messages = Message::all();
	    	$info = Information::first();
            $menu = "settings";
            $title = "Edit Setting";
	    	return view('admin/settings/edit', compact('info','menu','title' ,'messages'));
	    }

	public function updateSetting(Request $request){

		$this->validate($request,[
	        'name' 		=> 'required|string|max:100',
            'sitename'  => 'required|string|max:100',
	        'email'		=> 'required|email|min:3',
	        'title' 	=> 'required|min:3',
	        'location'  => 'required|max:150',
            'image'     => 'sometimes|nullable|image'
		]);

		try {

			$id = $request->tableid;


            $fileName =null;

            if ($request->hasFile('image')) {
                $fileName = time().'-'.rand('12345678', 9).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('img'), $fileName);

                $data = array('name' => $request->name,
                            'sitename'=> $request->sitename,
                            'email' => $request->email,
                            'title' => $request->title,
                            'location' => $request->location,
                            'image'    => $fileName);
            }else{

			$data = array('name' => $request->name,
                            'sitename'=> $request->sitename,
	    					'email' => $request->email,
	    					'title' => $request->title,
	    					'location' => $request->location);
        }

			$information = Information::where('id', 1)->first();
			if(!empty($information)){
				Information::where('id', $id)->update($data);
			}else{
				Information::create($data);
			}

            return redirect('/admin/settings')->with('success','User Updated Successfully');


		} catch (Exception $ex) {
			Log::error($ex);
            return redirect()->back()->withInput()->withErrors("Something went wrong. Please try again.");
		}

	    	return view('admin/settings/edit', compact('info'));
	    }


    public function addPortfolio(){
        $messages = Message::all();
        $info = Information::first();
        $title = 'Add Portfolio';
    	$menu= 'portfolio';
    	return view('admin/portfolio/add', compact('menu', 'info', 'title', 'messages'));
    }

    public function viewPortfolio(){
        $messages = Message::all();
        $info = Information::first();
        $title = 'view Portfolio';
    	$portfolios = Portfolios::get();
        $menu= 'portfolio';

    	return view('admin/portfolio/view', compact('portfolios', 'menu', 'info', 'title', 'messages'));
    }

    public function insertPortfolio(Request $request){

    	$this->validate($request,[
	        'name' 		=> 'required|string|max:100',
	        'link'		=> 'required|string|min:5',
	        'description' 	=> 'required|min:10',
            'image' => 'sometimes|nullable|image'
		]);

    	try {

            $fileName = null;
            $fileName = time().'-'.rand('12345678', 9).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/portfolio'), $fileName);

	    	$data = array('name' => $request->name,
	    				'description' => $request->description,
	    				'link' => $request->link,
                        'image' => $fileName
	    				 );

	    	Portfolios::create($data);
	    	return redirect('/admin/portfolio')->with('success', 'Portfolio Inserted Successfully');


    	} catch (Exception $e) {
    		Log::error($e);
    		return redirect()->back()->withInput()->withErrors("Something Went Wrong Please try again");
    	}



    	// return view('admin/portfolio/edit', compact(''));
    }


    public function editPortfolio($id){
        $messages = Message::all();
        $info = Information::first();
        $menu= 'portfolio';
        $title = 'Edit Portfolio';

    	$portfolio = Portfolios::findOrFail($id);

    	return view('admin/portfolio/edit', compact('portfolio', 'info', 'menu', 'title', 'messages'));
    }

    public function updatePortfolio(Request $request){

    	$this->validate($request,[
	        'name' 		=> 'required|string|max:100',
	        'link'		=> 'required|string|min:5',
	        'description' 	=> 'required|min:10',
            'image'     => 'sometimes|nullable|image'
		]);

    	try {

                $fileName = time().'-'.rand('12345678', 9).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('img/portfolio'), $fileName);

            $id = $request->id;


	    	$data = array('name' => $request->name,
	    				'description' => $request->description,
	    				'link' => $request->link,
                        'image' => $fileName
	    				 );

	    	Portfolios::where('id', $id)->update($data);
	    	return redirect('/admin/portfolio')->with('success', 'Portfolio updated Successfully');

    	} catch (Exception $e) {
    		Log::error($e);
    		return redirect()->back()->withInput()->withErrors("Something Went Wrong Please try again");
    	}

    }

    public function deletePortfolio($id){
    	$data = Portfolios::findOrFail($id);
    	$data->delete();
    	return redirect()->back()->with('success', 'Portfolio Deleted Successfully');
    }


    public function addSocial(){
        $messages = Message::all();
    	$info = Information::first();
        $title = 'Add Social';
        $menu = 'social';
    	return view('admin/social/add', compact('menu', 'info', 'title', 'messages'));
    }

    public function viewSocial(){
        $messages = Message::all();
        $info = Information::first();
        $menu= 'social';
        $title = 'View Social';
    	$socials = Social::get();

    	return view('admin/social/view', compact('socials', 'info', 'menu', 'title', 'messages'));
    }

    public function insertSocial(Request $request){
    	$this->validate($request,[
	        'name' 		=> 'required|string|max:100',
	        'link'		=> 'required|string|min:5',
	        'iclass' 	=> 'required',
	        'alt' 	=> 'max:50'
		]);

		try {

			$data = array(
				'title' => $request->name,
				'link' => $request->link,
				'icon_class' => $request->iclass,
				'alt' => $request->alt
		);

		Social::create($data);

		return redirect('/admin/social')->with('success', 'Social Link added Successfully');

		} catch (Exception $e) {
			Log::error($e);
			return redirect()->back()->withInput()->withErrors("Somthing Went Wrong ! Please Try again");
		}

    	// return view('admin/social/view', compact('socials'));
    }

    public function editSocial($id){
        $messages = Message::all();
        $info = Information::first();
        $menu= 'social';
    	$social = Social::findOrFail($id);
        $title = 'Edit Social';

    	return view('admin/social/edit', compact('social', 'info', 'menu', 'title', 'messages'));
    }

    public function updateSocial(Request $request){

    	$this->validate($request,[
	        'name' 		=> 'required|string|max:100',
	        'link'		=> 'required|string|min:5',
	        'iclass' 	=> 'required',
	        'alt'		=> 'max:100'
		]);

		try {

            $id = $request->id;

			$data = array(
				'title' => $request->name,
				'link' => $request->link,
				'icon_class' => $request->iclass,
				'alt' => $request->alt
		);

		Social::where('id', $id)->update($data);

		return redirect('/admin/social')->with('success', 'Social Link Updated Successfully');

		} catch (Exception $e) {
			Log::error($e);
			return redirect()->back()->withInput()->withErrors("Somthing Went Wrong ! Please Try again");
		}

    }

    public function deleteSocial($id){
    	$data = Social::findOrFail($id);
    	$data->delete();
    	return redirect()->back()->with('success', 'Social Link deleted Successfully');
    }


    public function message(){
        $info = Information::first();
        $menu= 'messages';
    	$messages = Message::get();
        $title = 'view Messages';
    	return view('admin/message/view', compact('messages', 'info', 'menu', 'title'));
    }
}
