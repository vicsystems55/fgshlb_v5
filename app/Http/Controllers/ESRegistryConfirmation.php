<?php

namespace App\Http\Controllers;

use App\ApplicationStage;

use Illuminate\Http\Request;

class ESRegistryConfirmation extends Controller
{
    //

    public function es_approve(Request $request)
    {
        # code...

        

        return redirect('/all_applications');
    }


}
