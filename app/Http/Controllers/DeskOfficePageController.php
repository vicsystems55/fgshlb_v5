<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\LoanType;

use App\PersonalInfo;

use App\FederalMinistry;

use App\Parastatal;



use App\DocumentUpload;

use Auth;

use Carbon\Carbon;

class DeskOfficePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice-dashboard', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function all_applications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/all_applications', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function single_application()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];



        return view('pages/deskoffice/single_application', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function notifications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/notifications', [
            'pageConfigs' => $pageConfigs
        ]);
    }


    public function operations()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/operations', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function roles()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $users = User::where('role', ['Desk-Officer'])->get();

        return view('pages/deskoffice/operations/roles', [
            'pageConfigs' => $pageConfigs,
            'users' => $users
        ]);
    }


    public function singlerole()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/operations/singlerole', [
            'pageConfigs' => $pageConfigs
        ]);
    }


    public function settings()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/settings', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function report()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/report', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
