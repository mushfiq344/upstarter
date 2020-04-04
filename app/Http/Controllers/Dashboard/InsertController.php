<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Models\Degree;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Fund;
use App\Models\Idea;
use App\Models\Job;
use App\Models\Opp_type;
use App\Models\Opportunity;
use App\Models\Organization;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Illuminate\Support\Facades\Auth;
use Image;
class InsertController extends Controller
{
    public function insert_form(Request $request, $post_type)
    {
        
       
        if ($request->object_id) {
            $object = FunctionController::get_object($request->object_id, $post_type);
        } 
        
        if($request->detail) {
            $detail=$request->detail;
        }
        else{
            $detail=default_description;
        }

        /*application process start*/
        if ($request->application_process) {
            $application_process=$request->application_process;
            }else{
            $application_process=default_description;
        }
        /*application process end*/
        /*benefits start*/
        if ($request->benefits) {
            $benefits = $request->input('benefits');
        }else{
            $benefits=default_description;
        }
        /*benefits end*/
        /*eligibilities start*/
        if ($request->eligibilities) {
            $eligibilities = $request->input('eligibilities');
        }else{
            $eligibilities=default_description;
        }
        /*eligibilities end*/
       
        
        if ($request->cover) {
            $coverName = 'cover_' . time() . '.' . $request->cover->getClientOriginalExtension();
            // $request->cover->move(public_path('/images'), $coverName);
            $img = Image::make(request()->cover)
                ->resize(1089, 611)
                ->save('images/' .$coverName);
            
            if ($request->object_id) {
                $object = FunctionController::get_object($request->object_id, $post_type);
                FunctionController::deleteImage($object->image);
            }
        }
       
            if ($request->object_id) {
                $entity = Opportunity::findOrFail($request->object_id);
            } else {
                $entity = new Opportunity();
            }
            
            $entity->title = $request->opportunity_title;
            $entity->type = $request->opportunity_type?: 'Undefined';
            $entity->application_process = $application_process;
            $entity->benefits = $benefits;
            $entity->eligibilities = $eligibilities;
            $entity->region=$request->region?: 'Undefined';
            $entity->funding_type=$request->funding_type?: 'Undefined';
            $entity->degree_type=$request->degree_type?: 'Undefined';
            $entity->address = $request->address?: 'Undefined';

            $entity->application_link = $request->link?: 'Undefined';
            $entity->website_link = $request->website_link?: 'Undefined';
            $entity->start_date = $request->start_date;
            $entity->end_date = $request->end_date;
            $entity->application_deadline = $request->deadline;

            $entity->country_id=$request->country_id?: 'Undefined';
            $entity->state_id=$request->state_id?: 'Undefined';
            $entity->city_id=$request->city_id?: 'Undefined';

            $entity->contact_info = $request->contact_info?: 'Undefined';
            $entity->tags = $request->tags?: '#upstarter';
            

        $entity->description = $detail;

        if ($request->latitude) {
            $entity->latitude = 'N/A';
        }
        if ($request->longitude) {
            $entity->longitude = 'N/A';
        }
        if ($request->cover) {
            $entity->image = url('images/' . $coverName);
        }
        if(!$request->cover && !$request->object_id){
            $entity->image=url(default_cover);
        }
        $entity->save();
        if($request->object_id){
            return redirect('admin/list/'.$post_type)->with('message', 'Update Successful!');
        }
        return redirect()->back()->with('message', 'Upload Successful!');
    }

    public function insert_category(Request $request, $post_type){

        if($post_type=='explore_cover' || $post_type=='home_cover' || $post_type=='post_opp_cover'
        || $post_type=='static_about_us_cover' || $post_type=='static_faqs_cover'
        || $post_type=='static_terms_cover'){
            $coverName = $post_type.'.jpg';
            // $request->cover->move(public_path('dashboard/images/default_images'), $coverName);
            $img = Image::make(request()->cover)
                ->resize(1089, 611)
                ->save('dashboard/images/default_images/' .$coverName);
        }
        else if($post_type=="funding_type") {
            if($request->object_id){
                $entity = Fund::findOrFail($request->object_id);
            }else{
                $entity = new Fund();
            }
            $entity->type=$request->type;
            $entity->save();
        }
        // start
        else if($post_type=="opportunity_type"){
            
            if($request->object_id){
                $entity = Opp_type::findOrFail($request->object_id);
            }else{
                $entity = new Opp_type();
            }
            $entity->type=$request->type;
            $entity->code=$request->code;
            $entity->bg_color=$request->bg_color;
            $entity->save();
        }
        // end
        elseif($post_type=='region'){
            if($request->object_id){
                $entity = Region::findOrFail($request->object_id);
            }else{
                $entity = new Region();
            }
            $entity->type=$request->type;
            $entity->save();
        }elseif($post_type=='degree_type'){
            if($request->object_id){
                $entity = Degree::findOrFail($request->object_id);
            }else{
                $entity = new Degree();
            }
            $entity->type=$request->type;
            $entity->save();
        }

        if($request->object_id){
            return redirect('admin/list/'.$post_type)->with('message', 'Update Successful!');
        }
        return redirect()->back()->with('message', 'Upload Successful!');
    }
}
