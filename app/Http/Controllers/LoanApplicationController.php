<?php

namespace App\Http\Controllers;

use App\LoanType;
use App\PersonalInfo;

use Illuminate\Http\Request;
use Auth;
use Redirect,Response;
use App\LoanApplication;
use App\LoanCeiling;

use DateTime;

use Session;

use App\FederalMinistry;

use App\Parastatal;

use App\DocumentUpload;

use App\ApplicationStage;

class LoanApplicationController extends Controller
{
    //
    public function stepApplyforLoan(Request $request)
    {
        # code...

        $loan_types = LoanType::all();
        
        $user_id = Auth::user()->id;

        $person = PersonalInfo::where('user_id', $user_id)->first(); 

        // now check if person is verified by es.
        if($person->status == "l") {

            



            return Redirect::to('/user/userloans')
            ->with('success', 'Please you must be verified by ES registry before you proceed');

        }

        else {

            $countLoan = LoanApplication::where('user_id', $user_id)->count();

         //   dd($countLoan);

            if($countLoan < 1) {

                /*
$loan = LoanTable::create([
            'user_id' => $id,
           
            'state' => $state,
            
            'lga' => $lga,
            'description' => $description,
            'noofmonths' => $noofmonths,
            'noofyears' => $yearsLeft-1,
            'amount' => $amountExpected,
           'loantype' => $loantype,
            'designation' => $designation,
            'totalpayback' => $compundInterest,
            'permonth' => $p
        ]);

        //'total', 'cieling', 'permonth','user_id'
        $paymentSchedule = RepaymentSchedule::create([

          'total' => $compundInterest,
          'cieling' => $amountExpected,
          'permonth' => $p,
          'user_id' => $id


                */
                // populate loan tabel make it ready for update

               
              
                LoanApplication::create([
                    'user_id' => $user_id

                ]);

                
            }

            $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loanstep1',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp
        ]);

        }
    }

    public function step1(Request $request)
    {
        # code...

        $loan_types = LoanType::all();
        
        $user_id = Auth::user()->id;

        $person = PersonalInfo::where('user_id', $user_id)->first(); 

        // now check if person is verified by es.
        if($person->status == "unverified") {

            



            return Redirect::to('/user/userloans')
            ->with('success', 'Please you must be verified by ES registry before you proceed');

        }

        else if($person->status == "verified") {

            $countLoan = LoanApplication::where('user_id', $user_id)->count();

         //   dd($countLoan);

            if($countLoan < 1) {

                /*
$loan = LoanTable::create([
            'user_id' => $id,
           
            'state' => $state,
            
            'lga' => $lga,
            'description' => $description,
            'noofmonths' => $noofmonths,
            'noofyears' => $yearsLeft-1,
            'amount' => $amountExpected,
           'loantype' => $loantype,
            'designation' => $designation,
            'totalpayback' => $compundInterest,
            'permonth' => $p
        ]);

        //'total', 'cieling', 'permonth','user_id'
        $paymentSchedule = RepaymentSchedule::create([

          'total' => $compundInterest,
          'cieling' => $amountExpected,
          'permonth' => $p,
          'user_id' => $id


                */
                // populate loan tabel make it ready for update

               
              
                LoanApplication::create([
                    'user_id' => $user_id

                ]);

                
            }


            $fed_min = FederalMinistry::all();

            $parastatals = Parastatal::all();
    
            $user_doc = DocumentUpload::where('user_id', $user_id)->get();
            $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
            $letter_introduction = DocumentUpload::where('user_id', $user_id)->where('name', 'letter_introduction')->first();
    
            $application_form = DocumentUpload::where('user_id', $user_id)->where('name', 'application_form')->first();
    
            $deed_guarantor1 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor1')->first();
    
            $deed_guarantor2 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor2')->first();
            $deed_guarantor3 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor3')->first();
            $guarantors_id = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_id')->first();
            $guarantors_confirmation = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_confirmation')->first();
          
            $guarantors_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_passport')->first();

            $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loan1',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp,
            'user_doc' => $user_doc,
            'letter_introduction' => $letter_introduction,

'application_form'  => $application_form, 

'deed_guarantor1' => $deed_guarantor1,

'deed_guarantor2'  => $deed_guarantor2, 
'deed_guarantor3'  => $deed_guarantor3, 
'guarantors_id'  => $guarantors_id, 
'guarantors_passport' => $guarantors_passport,
'guarantors_passport' => $guarantors_passport,
'personal_data' => $personal_data,
'guarantors_confirmation' => $guarantors_confirmation
        ]);

        }
    }




    public function uploadstep2(Request $request)
    {
        # code...

        $loan_types = LoanType::all();
        
        $user_id = Auth::user()->id;

        $person = PersonalInfo::where('user_id', $user_id)->first(); 

        // now check if person is verified by es.
        if($person->status == "unverified") {

            



            return Redirect::to('/user/userloans')
            ->with('success', 'Please you must be verified by ES registry before you proceed');

        }

        else if($person->status == "verified") {

            $countLoan = LoanApplication::where('user_id', $user_id)->count();

         //   dd($countLoan);

            if($countLoan < 1) {

               
               
              
                LoanApplication::create([
                    'user_id' => $user_id

                ]);

                
            }


            $fed_min = FederalMinistry::all();

            $parastatals = Parastatal::all();
    
            $user_doc = DocumentUpload::where('user_id', $user_id)->get();
            $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
            $last_promotion_letter = DocumentUpload::where('user_id', $user_id)->where('name', 'last_promotion_letter')->first();
    
            $document_and_investigation = DocumentUpload::where('user_id', $user_id)->where('name', 'document_and_investigation')->first();
    
            $titledocument = DocumentUpload::where('user_id', $user_id)->where('name', 'titledocument')->first();
    
            $building_plan = DocumentUpload::where('user_id', $user_id)->where('name', 'building_plan')->first();
            $power_of_attorney = DocumentUpload::where('user_id', $user_id)->where('name', 'power_of_attorney')->first();
            $current_payslip = DocumentUpload::where('user_id', $user_id)->where('name', 'current_payslip')->first();
            $name_on_list = DocumentUpload::where('user_id', $user_id)->where('name', 'name_on_list')->first();
          
            $guarantors_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_passport')->first();

            $letter_of_offer = DocumentUpload::where('user_id', $user_id)->where('name', 'letter_of_offer')->first();
           
            $reciept_of_payment = DocumentUpload::where('user_id', $user_id)->where('name', 'reciept_of_payment')->first();
            
            $letter_of_undertaking = DocumentUpload::where('user_id', $user_id)->where('name', 'letter_of_undertaking')->first();

            $cost_of_estimates = DocumentUpload::where('user_id', $user_id)->where('name', 'cost_of_estimates')->first();
            
            

            $nhf_passbook= DocumentUpload::where('user_id', $user_id)->where('name', 'nhf_passbook')->first();
             
            $current_payslip1 = DocumentUpload::where('user_id', $user_id)->where('name', 'current_payslip1')->first();
            $current_payslip2 = DocumentUpload::where('user_id', $user_id)->where('name', 'current_payslip2')->first();

            

            $guarantors_payslip = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_payslip')->first();
            $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loan2',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp,
            'user_doc' => $user_doc,
            'last_promotion_letter' => $last_promotion_letter,

'document_and_investigation'  => $document_and_investigation, 

'titledocument' => $titledocument,

'power_of_attorney'  => $power_of_attorney, 
'building_plan'  => $building_plan, 
'current_payslip'  => $current_payslip, 
'current_payslip1'  => $current_payslip1, 
'current_payslip2'  => $current_payslip2, 
'name_on_list' => $name_on_list,
'letter_of_offer' => $letter_of_offer,
'letter_of_undertaking' => $letter_of_undertaking,
'reciept_of_payment' => $reciept_of_payment,
'cost_of_estimates' => $cost_of_estimates,
'nhf_passbook' => $nhf_passbook,
'guarantors_payslip' => $guarantors_payslip,

'personal_data' => $personal_data
        ]);

        }
    }



    //return page that updates loan(get request)
    public function showLoan1blade(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;
       // $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
        $loan_types = LoanType::all();
        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 


       
        $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loan2',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp,
            'personal_data' => $personal_data
        ]);
    }

    public function updateLoanType(Request $request)
    {
        # code...

        $pageConfigs = [
            'pageHeader' => true
        ];

        $request->validate([
            'loantype' => 'required|max:255',
            'amount' => 'required|numeric'
        ]);

        $user_id = Auth::user()->id;

        $loanApp = LoanApplication::where('user_id', $user_id)->first();
         
        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
        $level = $personal_data->level;
        
        $ceiling = LoanCeiling::where('grade_level', $level)->first();

        if($request->amount > $ceiling->approved_ceiling) {

            session()->flash('message', 'Error!! Amount entered is greater than loan approved cieling 
            approved amount is NGN'.$ceiling->approved_ceiling);
            return redirect()->back();
        }
        else {

        $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'loantype' => $request->loantype,
            'amount' => $request->amount
        ]);

        $fed_min = FederalMinistry::all();

            $parastatals = Parastatal::all();
    
            $user_doc = DocumentUpload::where('user_id', $user_id)->get();
            $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
            $letter_introduction = DocumentUpload::where('user_id', $user_id)->where('name', 'letter_introduction')->first();
            $name_on_list = DocumentUpload::where('user_id', $user_id)->where('name', 'name_on_list')->first();
            $application_form = DocumentUpload::where('user_id', $user_id)->where('name', 'application_form')->first();
    
            $deed_guarantor1 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor1')->first();
    
            $deed_guarantor2 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor2')->first();
            $deed_guarantor3 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor3')->first();
            $guarantors_id = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_id')->first();
            $guarantors_confirmation = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_confirmation')->first();
          
            //nhf_passbook

            $guarantors_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_passport')->first();
            $last_promotion_letter = DocumentUpload::where('user_id', $user_id)->where('name', 'last_promotion_letter')->first();
    
            $document_and_investigation = DocumentUpload::where('user_id', $user_id)->where('name', 'document_and_investigation')->first();
        
       // return view('pages.user.loan_application.loan2');

        return view('pages.user.loan_application.loan1',[
           
            'loanApp' => $loanApp,
            'user_doc' => $user_doc,
            'personal_data' => $personal_data,
            'letter_introduction' => $letter_introduction,

            'application_form'  => $application_form, 
            
            'deed_guarantor1' => $deed_guarantor1,
            
            'deed_guarantor2'  => $deed_guarantor2, 
            'deed_guarantor3'  => $deed_guarantor3, 
            'guarantors_id'  => $guarantors_id, 
            'guarantors_passport' => $guarantors_passport,
            'guarantors_passport' => $guarantors_passport,
            'personal_data' => $personal_data,
            'guarantors_confirmation' => $guarantors_confirmation,
            'last_promotion_letter' => $last_promotion_letter,

            'document_and_investigation'  => $document_and_investigation,
            'name_on_list' => $name_on_list
           

        ]);

        }
    }

    public function loan3(Type $var = null)
    {
        # code...

        return view('pages.user.loan_application.loan3');
    }




    public function PreviousButtonForupdateLoanType(Request $request)
    {
        # code...

        $pageConfigs = [
            'pageHeader' => true
        ];

      

        $user_id = Auth::user()->id;

        $loanApp = LoanApplication::where('user_id', $user_id)->first();
         
        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
        $level = $personal_data->level;
        
        $ceiling = LoanCeiling::where('grade_level', $level)->first();

       

        $fed_min = FederalMinistry::all();

            $parastatals = Parastatal::all();
    
            $user_doc = DocumentUpload::where('user_id', $user_id)->get();
            $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
            $letter_introduction = DocumentUpload::where('user_id', $user_id)->where('name', 'letter_introduction')->first();
            $name_on_list = DocumentUpload::where('user_id', $user_id)->where('name', 'name_on_list')->first();
            $application_form = DocumentUpload::where('user_id', $user_id)->where('name', 'application_form')->first();
    
            $deed_guarantor1 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor1')->first();
    
            $deed_guarantor2 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor2')->first();
            $deed_guarantor3 = DocumentUpload::where('user_id', $user_id)->where('name', 'deed_guarantor3')->first();
            $guarantors_id = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_id')->first();
            $guarantors_confirmation = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_confirmation')->first();
          
            //nhf_passbook

            $guarantors_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'guarantors_passport')->first();
            $last_promotion_letter = DocumentUpload::where('user_id', $user_id)->where('name', 'last_promotion_letter')->first();
    
            $document_and_investigation = DocumentUpload::where('user_id', $user_id)->where('name', 'document_and_investigation')->first();
        
       // return view('pages.user.loan_application.loan2');

        return view('pages.user.loan_application.loan1',[
           
            'loanApp' => $loanApp,
            'user_doc' => $user_doc,
            'personal_data' => $personal_data,
            'letter_introduction' => $letter_introduction,

            'application_form'  => $application_form, 
            
            'deed_guarantor1' => $deed_guarantor1,
            
            'deed_guarantor2'  => $deed_guarantor2, 
            'deed_guarantor3'  => $deed_guarantor3, 
            'guarantors_id'  => $guarantors_id, 
            'guarantors_passport' => $guarantors_passport,
            'guarantors_passport' => $guarantors_passport,
            'personal_data' => $personal_data,
            'guarantors_confirmation' => $guarantors_confirmation,
            'last_promotion_letter' => $last_promotion_letter,

            'document_and_investigation'  => $document_and_investigation,
            'name_on_list' => $name_on_list
           

        ]);

        
    }


    
}
