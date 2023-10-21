<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Service\Service;
use App\Models\Server\Business\Setup;
use App\Models\Server\Question;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('service','setup')->get()->all();
        return view('server.question.index')->with(compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get()->all();
        $setups = Setup::get()->all();
        return view('server.question.create')->with(compact('services','setups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach($request['group-question'] as $questions)
        {
            if($questions['qsn'] != null)
            {
                //dd($question['qsn']);
                $question = new Question();
                $question->type = $request->type;
                if($request->type == 'Service' && $request->service_id != 0)
                {
                    $question->service_id = $request->service_id;
                }
                if($request->type == 'Setup' && $request->setup_id != 0)
                {
                    $question->setup_id = $request->setup_id;
                }
                if($request->setup_id != 0 && $request->service_id != 0)
                {
                    return redirect(route('question.index'))->with('error','Choose Only Service or Business Setup');
                }
                $question->qsn = $questions['qsn'];
                $question->ans = $questions['ans'];
                $question->save();
            }
        }
        
        return redirect(route('question.index'))->with('success','Question Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $question = Question::where('id',$id)->get()->first();
        return view('server.question.edit')->with(compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $question = Question::findorFail($id);
        $question->qsn = $request->qsn;
        $question->ans = $request->ans;
        $question->update();
        return redirect(route('question.index'))->with('success','Question Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Question::findorFail($id)->delete();
        return redirect(route('question.index'))->with('success','Question Delete Successfully');
    }
}
