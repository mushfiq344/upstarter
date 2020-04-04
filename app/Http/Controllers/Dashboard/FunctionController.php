<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
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
use App\Models\State;
use App\Models\Subs;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FunctionController extends Controller
{
    public static function get_states($country_id)
    {
        $states = State::where('country_id', $country_id)->get();
        return $states;
    }

    public static function get_cities($state_id)
    {

        $cities = City::where('state_id', $state_id)->get();
        return $cities;
    }

    public static function get_all_objects($type)
    {
        if ($type == 'event') {
            $entity = Event::all();

        } elseif ($type == 'expo') {
            $entity = Expo::all();

        } elseif ($type == 'scholarship') {
            $entity = Opportunity::all();

        } elseif ($type == 'job') {
            $entity = Job::all();
        } else {
            $entity = Organization::all();
        }
        return $entity;
    }

    public static function get_object($id, $type)
    {
        if ($type == 'idea') {
            $entity = Idea::findOrFail($id);
        } elseif ($type == 'region') {
            $entity = Region::findOrFail($id);
        } elseif ($type == 'opportunity_type') {
            $entity = Opp_type::findOrFail($id);
        } elseif ($type == 'degree_type') {
            $entity = Degree::findOrFail($id);
        }
        elseif ($type == 'blog') {
            $entity = Blog::findOrFail($id);
        } elseif ($type == 'event') {

            $entity = Event::findOrFail($id);

        } else if ($type == 'expo') {
            $entity = Expo::findOrFail($id);

        } elseif ($type == 'opportunity') {
            $entity = Opportunity::findOrFail($id);

        } elseif ($type == 'job') {
            $entity = Job::findOrFail($id);
        } else {
            $entity = Organization::findOrFail($id);
        }
        return $entity;
    }

    public static function get_list($type)
    {

        if ($type == 'idea') {
            if (auth()->user()->type == 1) {
                $entity = Idea::all();
            } else {
                $entity = Idea::where('uploader_id', auth()->user()->id)->get();
            }

        } else if ($type == 'region') {
            $entity = Region::all();
        } else if ($type == 'degree_type') {
            $entity = Degree::all();
        }
        else if ($type == 'opportunity_type') {
            $entity = Opp_type::all();
        } else if ($type == 'blog') {
            $entity = Blog::all();
        } elseif ($type == 'event') {
            $entity = Event::all();

        } elseif ($type == 'expo') {
            $entity = Expo::all();

        } elseif ($type == 'opportunity') {
            $entity = Opportunity::all();

        } elseif ($type == 'job') {
            $entity = Job::all();
        }
        elseif ($type == 'subscribers') {
            $entity = Subs::all();
        }elseif ($type == 'messages') {
            $entity = Subs::orderBy('created_at','DESC')->get();
        }
        else {
            $entity = Organization::all();
        }
        return $entity;
    }

    public static function deleteImage($url)
    {
        if($url!=url(default_cover)) {
            File::delete(ltrim(str_replace(url('/'), '', $url),'/'));
        }
    }

    public static function deleteFolder($folder_id)
    {
        File::deleteDirectory(public_path('images/' . ltrim($folder_id, '/')));

    }

    public static function delete_object($id, $type)
    {
        $object = self::get_object($id, $type);
        if ($object->image) {
            self::deleteImage($object->image);
        }
        if ($object->logo) {
            self::deleteImage($object->logo);
        }
        if ($object->image_folder_id) {
            self::deleteFolder($object->image_folder_id);
        }
        self::delete_row($type, $id);
        return "done";
    }

    public static function delete_row($type, $id)
    {

        if ($type == 'idea') {
            Idea::where('id', $id)->delete();
        } elseif ($type == 'region') {
            Region::where('id', $id)->delete();
        } elseif ($type == 'opportunity_type') {
            Opp_type::where('id', $id)->delete();
        } elseif ($type == 'blog') {
            Blog::where('id', $id)->delete();
        } elseif ($type == 'event') {
            Event::where('id', $id)->delete();
        } elseif ($type == 'expo') {
            Expo::where('id', $id)->delete();
        } elseif ($type == 'opportunity') {
            Opportunity::where('id', $id)->delete();
        } elseif ($type == 'job') {
            Job::where('id', $id)->delete();
        } else {
            Organization::where('id', $id)->delete();
        }
    }

    public static function checking($type, $id = null)
    {

        if (auth()->user()->type == 0) {
            //change
            if ($type == 'event'
                || $type == 'expo'
                || $type == 'organization'
                || $type == 'job'
                || $type == 'scholarship'
                || $type == 'blog'
                || $type == 'opportunity_type'
                || $type == 'region'
                || $type == 'subscribers'
                || $type == 'messages'
            ) {
                return 0;
            } else {
                if ($id == null) {
                    return 1;
                }
                $entity = self::get_object($id, $type);
                if ($entity->uploader_id == auth()->user()->id) {
                    return 1;
                } else {
                    return 0;
                }

            }
        }
        return 1;
    }

    public static function get_region_name($id)
    {
        $object=Region::find($id);
        if(!$object){
            return "Undefined";
        }else{
            return $object->type;
        }
    }
    

    
    public static function get_country_name($id)
    {
        if($id=='all'){
            return "All";
        }else {
            $object = Country::where('country_id',$id)->first();
            return $object->country_name;
        }
    }

    public static function inc_application($id,$type)
    {
        if($type=='opportunity'){
            Opportunity::where('id',$id)->increment('total_application',1);
        }
    }

    public function image_upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path('ckeditor_storage'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('ckeditor_storage/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
