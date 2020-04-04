<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\City;
use App\Models\Country;
use App\Models\Degree;
use App\Models\Event;
use App\Models\Fund;
use App\Models\Opp_type;
use App\Models\Opportunity;
use App\Models\Region;
use App\Models\State;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Description;
use DB;
class PagesController extends Controller
{


    public function index()
    {
        $region_posts = DB::table('opportunity')
            ->select(DB::raw('count(*) as user_count, country_id'))
            ->groupBy('country_id')
            ->get();

        $opportunities=Opportunity::all()->count();
        $top_visited_opps=Opportunity::orderBy('total_view','desc')->limit(5)->get();
        $top_applied_opps=Opportunity::orderBy('total_application','desc')->limit(5)->get();
        $total_views=Opportunity::sum('total_view');
        $total_applications=Opportunity::sum('total_application');
        $total_regions=Country::all()->count();
        //return $region_posts;
        return view('admin_panel.home')
            ->with('total_opp',$opportunities)
            ->with('total_regions',$total_regions)
            ->with('regions',$region_posts)
            ->with('top_visited_opps',$top_visited_opps)
            ->with('top_applied_opps',$top_applied_opps)
            ->with('total_views',$total_views)
            ->with('total_applications',$total_applications);
    }

    /**
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function upload_form($type){

        $auth_permission=FunctionController::checking($type);
        if($auth_permission==0){
            return redirect()->back();
        }
        $operation='Upload';
        // covers
        if($type=='explore_cover' || $type=='home_cover'|| $type=="post_opp_cover" || $type=='static_about_us_cover'
        || $type=='static_faqs_cover' || $type=='static_terms_cover'){
            return view('admin_panel.forms.upload.cover')->with('type',$type)->with('operation',$operation);
        }
        // filter categories
        elseif($type=='opportunity_type' || $type=='region' || $type=='funding_type' || $type=='degree_type'){
            return view('admin_panel.forms.upload.category')->with('type',$type)->with('operation',$operation);
        }
        // opportunity
        elseif($type=='opportunity'){


            $countries=Country::all();
            $opportunity_types=Opp_type::all();
            $eligible_regions=Region::all();
            $funding_types=Fund::all();
            $degree_types=Degree::all();
            return view('admin_panel.forms.upload.opportunity')->with('type',$type)->with('operation',$operation)
                ->with('countries',$countries)
                ->with('opportunity_types',$opportunity_types)
                ->with('degree_types',$degree_types)
                ->with('eligible_regions',$eligible_regions)
                ->with('funding_types',$funding_types);
        }
    }
    public function edit_form($type,$id){

        
        $operation='Edit';
        $object=FunctionController::get_object($id,$type);
        
        if($type=='idea'){
            return view('admin_panel.forms.upload.blog')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }
        elseif($type=='blog'){
            return view('admin_panel.forms.upload.blog')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }
        elseif($type=='opportunity_type'  || $type=='region' || $type=='degree_type'){
            return view('admin_panel.forms.upload.category')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }
        elseif($type=='event'){

            return view('admin_panel.forms.upload.event')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }elseif($type=='expo'){
            return view('admin_panel.forms.upload.event')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }
        elseif ($type=='organization'){
            return view('admin_panel.forms.upload.organization')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }
        elseif ($type=='job'){
            return view('admin_panel.forms.upload.job')->with('type',$type)->with('object',$object)->with('operation',$operation);
        }elseif($type=='opportunity'){
            $countries=Country::all();
            $opportunity_types=Opp_type::all();
            $eligible_regions=Region::all();
            $funding_types=Fund::all();
            $degree_types=Degree::all();
            $states=State::where('country_id',$object->country_id)->get();
            $cities=City::where('state_id',$object->state_id)->get();

            return view('admin_panel.forms.upload.opportunity')->with('type',$type)->with('object',$object)->with('operation',$operation)
                ->with('countries',$countries)
                ->with('states',$states)
                ->with('cities',$cities)
                ->with('opportunity_types',$opportunity_types)
                ->with('eligible_regions',$eligible_regions)
                ->with('funding_types',$funding_types)
                ->with('degree_types',$degree_types);
        }
    }

    public function list($type){
        
        $objects=FunctionController::get_list($type);
        
        return view('admin_panel.list')->with('objects',$objects)->with('type',$type);
    }

    public function get_single_data($type,$id){
        return FunctionController::get_object($id,$type);
    }

    public function get_all_data($type){

        return FunctionController::get_all_objects($type);
    }

    public function change_password(){
        return view('admin_panel.forms.change-password')
            ->with('operation','Account Setting')
            ->with('type','Change Password');
}
}
