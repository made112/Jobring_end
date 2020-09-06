<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest ;

class JobController extends Controller
{
    public function create()
    {

        return view('admin.job.add_Job');
    }

    public function store(JobRequest $request)
    {
//        return $request ;
        try {
            Job::create($request->except(['_token']));

            return redirect()->route('jop')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {

        }
        return redirect()->route('jop')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

    public function index()
    {
        $Jobs = Job::Selection()->paginate(PAGINATION_COUNT);
        return view('admin.job.index', compact('Jobs'));


    }
    public function edit($id)
    {
        $Jobs = Job::Selection()->find($id);

        if (!$Jobs)
            return redirect()->route('admin.job')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.job.edit', compact('Jobs'));

    }
    public function update($id, JobRequest $request)
    {

        try {
            $Jobs = Job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.job', $id)->with(['error' => 'هذه الزظيفة غير موجوده']);
            }
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $Jobs->update($request->except('_token'));

            return redirect()->route('jop')->with(['success' => 'تم تحديث الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.job')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function destroy($id){
        try {
            $Jobs = Job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.job', $id)->with(['error' => 'هذه الوظيفة غير موجوده']);
            }
            $Jobs->delete();

            return redirect()->route('jop')->with(['error' => 'تم حذف الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.job')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
