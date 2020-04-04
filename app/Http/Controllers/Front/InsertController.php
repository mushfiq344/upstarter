<?php

namespace App\Http\Controllers\Front;
use App\Models\Degree;
use App\Models\Fund;
use App\Models\Opp_type;
use App\Models\Region;
use App\Models\Subs;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsertController extends Controller
{
        public function insert_form(Request $request,$type){

            $object=Subs::where('email',$request->email)->get();
            if(count($object)==0){
                $row=new Subs();
                $row->email=$request->email;
                if($request->name){
                    $row->name=$request->name;
                }else{
                    $row->name="Not Provided";
                }
                $row->save();
            }
            return redirect()->back()->with('message', 'Upload Successful!');
        }
    
        public function post_search(Request $request){
            //return $request;
            
            return redirect()->route('get_search',['title'=>$request->search]);
            
        }
        public function get_search($title){
            $objects=Opportunity::where('title','like',$title.'%')->where('approved',1)->paginate(4);
            $opportunity_types=Opp_type::all();
            $eligible_regions=Opportunity::distinct()->get(['country_id']);
            $funding_types=Fund::all();
            $degree_types=Degree::all();

            $fund_id='all';
            $degree_id='all';
            $type='all';
            $region='all';
            $deadline='all';
            
        return view('front_end.opp')
            ->with('objects',$objects)
            ->with('regions',$eligible_regions)
            ->with('opp_types',$opportunity_types)
            ->with('funding_types',$funding_types)
            ->with('degree_types',$degree_types)
            ->with('type_id',$type)
            ->with('region_id',$region)
            ->with('fund_id',$fund_id)
            ->with('degree_id',$degree_id)
            ->with('deadline',$deadline)
            ;
            
        }

    public function get_empty_search(){
        $objects=Opportunity::where('approved',1)->paginate(4);
        $opportunity_types=Opp_type::all();
        $eligible_regions=Opportunity::distinct()->get(['country_id']);
        $funding_types=Fund::all();
        $degree_types=Degree::all();

        $fund_id='all';
        $degree_id='all';
        $type='all';
        $region='all';
        $deadline='all';

        return view('front_end.opp')
            ->with('objects',$objects)
            ->with('regions',$eligible_regions)
            ->with('opp_types',$opportunity_types)
            ->with('funding_types',$funding_types)
            ->with('degree_types',$degree_types)
            ->with('type_id',$type)
            ->with('region_id',$region)
            ->with('fund_id',$fund_id)
            ->with('degree_id',$degree_id)
            ->with('deadline',$deadline)
            ;

    }
}
