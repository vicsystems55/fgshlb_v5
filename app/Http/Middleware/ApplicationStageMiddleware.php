<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use App\ApplicationStage;

class ApplicationStageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id = Auth::user()->id;
        
        $application_stage = ApplicationStage::where('user_id', $user_id)->first();

        if($application_stage && $application_stage->stage=="Stage1"){



            return redirect('/spinner');
            
            }

            else{

               

                return $next($request); 
            }



            if($application_stage && $application_stage->stage=="Stage2"){



                return redirect('/spinner');
                
                }
    
                else{
    
                   
    
                    return $next($request); 
                }
    }
}
