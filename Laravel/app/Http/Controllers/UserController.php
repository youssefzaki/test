<?php
class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('user.profile', array('user' => $user));
    }
	
    /**
     * Show the profile for the given user.
     */
    public function getIndex()
    {
        /* $user = User::find($id);

        return View::make('user.profile', array('user' => $user)); */
		
			
    }

}