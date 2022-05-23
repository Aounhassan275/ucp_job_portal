<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Job;
use App\Models\Member;
use App\Models\Profile;
use App\Models\S_deposit;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PageController extends Controller
{
     public function jobs()
    {
        $jobs = Job::where('status','Approved')->orderby('created_at','desc')->get();
        return view('front.job.jobs',compact('jobs'));
    }
     public function showJobnext($title)
    {
        $job=Job::where('title',str_replace('_', ' ',$title))->first();
        $id = $job->id;
        $job=Job::find($id);
        if($job)
        {
            $job->update([
                'view' => $job->view +1,
            ]);
        }
        return view('front.job.show',compact('job'));
    }
    public function showCandidatenext($name)
    {
        $profile=Profile::where('name',str_replace('_', ' ',$name))->first();
        $id = $profile->id;
        $profile=Profile::find($id);
        return view('front.candidate.show',compact('profile'));
    }
    public function showServiceprovidernext($name)
    {
        $service=Service::where('name',str_replace('_', ' ',$name))->first();
        $id = $service->id;
        $service=Service::find($id);
        $s_deposit=S_deposit::where('service_id',$id)->get();
        return view('front.service_provider.show',compact('service','s_deposit'));
    }
    public function showBlognext($title)
    {
        $blog=Blog::where('title',str_replace('_', ' ',$title))->first();
        $id = $blog->id;
        $blog=Blog::find($id);
        return view('front.blog.show',compact('blog'));
    }  
    public function showServicenext($name)
    {
            $skill=Skill::where('name',str_replace('_', ' ',$name))->first();
            $id = $skill->id;
            $skill=Skill::find($id);
            $s_deposits=S_deposit::where('skill_id',$id)->get();
            return view('front.service.show',compact('skill','s_deposits'));
    }
    public function showCategorynext($name)
    {
            $category=Category::where('name',str_replace('_', ' ',$name))->first();
            $id = $category->id;
            $category=Category::find($id);
            $jobs=Job::where('category_id',$id)->get();
            return view('front.category.show',compact('category','jobs'));
    }
    public function getDownload()
    {
    
        //PDF file is stored under project/public/download/info.pdf
    
        $file= public_path(). "/Form.pdf";
    
     
    
        $headers = array(
    
                  'Content-Type: application/pdf',
    
                );
    
     
    
        return Response::download($file, 'filename.pdf', $headers);
    
    }
       public function search(Request $request)
         {
            if($request->keyword && $request->location){
                    $this->jobs = Job::where('location','Like', '%'.$request->location.'%')
                            ->Where('title', 'LIKE', '%' . $request->keyword . '%')
                            ->where('status','Approved')->distinct()->get();
            }
        
            else if($request->location){
                    $this->jobs = Job::where('location','Like', '%'.$request->location.'%')
                    ->where('status','Approved')->distinct()->get();
            }
        
            else if($request->keyword){
                    $this->jobs = Job::Where('title', 'LIKE', '%' . $request->keyword . '%')->where('status','Approved')->distinct()->get();
            }

            else
                $this->jobs = Job::where('status','Approved')->get();
            
            
            $keyword = $request->keyword?$request->keyword:'';
            $location = $request->location?$request->location:'';


            // dd($this->jobs);
            return view('front.job.index')
                ->with('Keyword', $keyword)
                ->with('Location', $location)
                ->with('jobs', $this->jobs);

    }
}
