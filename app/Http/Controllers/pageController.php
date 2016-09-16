<?php namespace App\Http\Controllers;

use App\User;
use Validator;

/**
 * Page controller
 *
 *
 */

class PageController extends Controller
{

    /**
     * View user page
     *
     *
     */
    public function user(){

        return view('account.index');



    }


}



