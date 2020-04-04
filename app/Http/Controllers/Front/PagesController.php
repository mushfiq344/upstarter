<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Dashboard\FunctionController;
use App\Models\Country;
use App\Models\Degree;
use App\Models\Fund;
use App\Models\Opp_type;
use App\Models\Opportunity;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{



    // 

    public function index()
    {
        

        $opportunity_types = Opp_type::all();
        $opps=Opportunity::latest()->take(4)->get();
        
       
        return view('front_end.welcome')
            ->with('opp_types', $opportunity_types)
            ->with('opps',$opps);
            


    }
    public function opportunities($category=null,$region=null,$deadline=null){
        if($category==null){
            $category='';
        };
        if($region==null){
            $region='';
        };
        if($deadline==null){
            $deadline='';
        };
        $opps=Opportunity::where('type','like','%'.$category.'%')->where('application_deadline','like','%'.$deadline.'%')->paginate(2);
        
        
        $opportunity_types = Opp_type::pluck('type', 'id');
        $regions = Region::pluck('type', 'id');
        $deadlines=Opportunity::select('application_deadline')->distinct()->pluck('application_deadline','application_deadline')->toArray();
        
        
        return view('front_end.opportunities')
            ->with('opp_types', $opportunity_types)
            ->with('regions',$regions)
            ->with('opps',$opps)
            ->with('deadlines',$deadlines);
            
    }
    public function searchOpps(Request $request){
       return $request;
     }

     public function opportunity($id)
    {
       
        $object = FunctionController::get_object($id, 'opportunity');
        
        Opportunity::where('id', $id)->increment('total_view', 1);
        return view('front_end.details')
            ->with('object', $object);
            // ->with('regions', $eligible_regions)
            // ->with('opp_types', $opportunity_types);
    }

    // 
    public function post_page()
    {
        
        $countries = Country::all();
        $opportunity_types = Opp_type::all();
        $eligible_regions = Opportunity::distinct()->get(['country_id']);
        $funding_types = Fund::all();
        $degree_types = Degree::all();
        return view('front_end.form')
            ->with('countries', $countries)
            ->with('regions', $eligible_regions)
            ->with('opp_types', $opportunity_types)
            ->with('funding_types', $funding_types)
            ->with('degree_types', $degree_types);
    }
    public function post_opp()
    {
        $opportunity_types=Opp_type::all();
        $countries = Country::all();
        $opportunity_types = Opp_type::all();
        $eligible_regions = Opportunity::distinct()->get(['country_id']);
        $funding_types = Fund::all();
        $degree_types = Degree::all();
        
        return view('front_end.form')
            ->with('countries', $countries)
            ->with('opportunity_types',$opportunity_types)
            ->with('regions', $eligible_regions)
            ->with('opp_types', $opportunity_types)
            ->with('funding_types', $funding_types)
            ->with('degree_types', $degree_types);
    }

    public function static_page($type)
    {
        $trendings = Opportunity::where('approved', 1)->orderby('total_view', 'desc')->get();
        $countries = Country::all();
        $opportunity_types = Opp_type::all();
        $eligible_regions = Opportunity::distinct()->get(['country_id']);
        $funding_types = Fund::all();
        $degree_types = Degree::all();
        return view('front_end.static_pages.about_us')
            ->with('countries', $countries)
            ->with('regions', $eligible_regions)
            ->with('opp_types', $opportunity_types)
            ->with('trendings', $trendings)
            ->with('funding_types', $funding_types)
            ->with('degree_types', $degree_types)
            ->with('type', $type);
    }

    

    

    public function explore_opp(Request $request)
    {
        if (!$request->deadline) {
            $deadline = 'all';
        } else {
            $deadline = $request->deadline;
        }
        if (!$request->degree_type) {
            $degree_type = 'all';
        } else {
            $degree_type = $request->degree_type;
        }
        return redirect()->route('get_explore_opp', ['type' => $request->type,
            'region' => $request->region, 'funding_type' => $request->funding_type, 'deadline' => $deadline, 'degree_type' => $degree_type]);
    }

    public function get_opps($type, $region, $funding_type, $deadline, $degree_type)
    {

        if ($type == 'all' && $region == 'all' && $funding_type == 'all') {
            $objects = Opportunity::paginate(4);

        } elseif ($type == 'all' && $region == 'all' && $funding_type != 'all') {
            $objects = Opportunity::where('funding_type', $funding_type)->paginate(4);
        } elseif ($type == 'all' && $region != 'all' && $funding_type == 'all') {
            $objects = Opportunity::where('country_id', $region)->paginate(4);
        } elseif ($type == 'all' && $region != 'all' && $funding_type != 'all') {
            $objects = Opportunity::where('country_id', $region)->where('funding_type', $funding_type)->paginate(4);
        } elseif ($type != 'all' && $region == 'all' && $funding_type == 'all') {
            $objects = Opportunity::where('type', $type)->paginate(4);
        } elseif ($type != 'all' && $region == 'all' && $funding_type != 'all') {
            $objects = Opportunity::where('type', $type)->where('funding_type', $funding_type)->paginate(4);
        } elseif ($type != 'all' && $region != 'all' && $funding_type == 'all') {
            $objects = Opportunity::where('type', $type)->where('country_id', $region)->paginate(4);
        } else {
            $objects = Opportunity::where('type', $type)->where('country_id', $region)->where('funding_type', $funding_type)->paginate(4);
        }



        if ($deadline != 'all') {
            $today=strtotime(date('Y-m-d'). ' + '.$deadline.' days');

            foreach ($objects as $key => $follower) {

                if(strtotime($follower->application_deadline)>$today) {
                unset($objects[$key]);
                }
            }
        }
        if ($degree_type != 'all') {
            foreach ($objects as $key => $follower) {

                if ($follower->degree_type != $degree_type) {
                    unset($objects[$key]);
                }
            }
        }

        $opportunity_types = Opp_type::all();
        $eligible_regions = Opportunity::distinct()->get(['country_id']);
        $funding_types = Fund::all();
        $degree_types = Degree::all();
        return view('front_end.opp')
            ->with('objects', $objects)
            ->with('regions', $eligible_regions)
            ->with('opp_types', $opportunity_types)
            ->with('funding_types', $funding_types)
            ->with('degree_types', $degree_types)
            ->with('type_id', $type)
            ->with('region_id', $region)
            ->with('fund_id', $funding_type)
            ->with('degree_id', $degree_type)
            ->with('deadline', $deadline);
    }


}
