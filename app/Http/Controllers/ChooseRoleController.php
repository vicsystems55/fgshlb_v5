<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ActivityLog;

use Auth;

class ChooseRoleController extends Controller
{
    public function index()
    {
        if (Auth::user()->role =='Super-Admin') {
            return redirect('/superadmin');
        }

        elseif (Auth::user()->role =='Applicant') {

            ActivityLog::create([
                'action_by' => Auth::user()->id,
                'title' => 'User Authentication',
                'log' => 'Just Logged in'
            ]);
            return redirect('/user');
        }

        elseif (Auth::user()->role =='Desk-Officer') {

            ActivityLog::create([
                'action_by' => Auth::user()->id,
                'title' => 'User Authentication',
                'log' => 'Just Logged in'
            ]);
            

            if (Auth::user()->type=='Operations') {
                
                return redirect('/deskoffice/operations');

            }else{

            return redirect('/deskoffice');

            }
        }

        elseif (Auth::user()->role =='Accounts') {

            ActivityLog::create([
                'action_by' => Auth::user()->id,
                'title' => 'User Authentication',
                'log' => 'Just Logged in'
            ]);
            return redirect('/accounts');
        }

        elseif (Auth::user()->role =='ES-Registry') {

            ActivityLog::create([
                'action_by' => Auth::user()->id,
                'title' => 'User Authentication',
                'log' => 'Just Logged in'
            ]);
            return redirect('/es');
        }

        else{
            abort(403);
        }
    }
}
