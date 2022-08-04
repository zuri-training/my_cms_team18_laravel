<?php

namespace App\Http\Controllers;

use App\Models\OriginalTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OriginalTemplateController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     if(Auth::user()->type === 3):
    //         abort(403);
    //     endif;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;

        return view('admin.all-template')->with('templates', OriginalTemplate::latest()->get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicIndex()
    {
        return view('all-template')->with('templates', OriginalTemplate::latest()->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;

        return view('admin.create-template');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;

        // dd($request->input());

        $validatedData = $request->validate([
            'name' => 'required', 'min:3', 'unique:original_templates',
            'content_html' => 'required',
            'content_css' => 'required'
        ]);

        $originalTemplate = OriginalTemplate::create([
            'name' => $validatedData['name'],
            'content_html' => $validatedData['content_html'],
            'content_css' => $validatedData['content_css'],
            'author' => Auth::id()
        ]);

        // preview image
        // 
        // if($request->hasFile('preview_image')):
        //     $originalTemplate->preview_image = 'hello';
        //     $originalTemplate->update();
        // endif;

        return redirect()->back()->withStatus('Template Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OriginalTemplate  $originalTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(OriginalTemplate $originalTemplate)
    {
        return view('preview-template')->with('template', $originalTemplate);
    }
    public function iframe(OriginalTemplate $originalTemplate)
    {
        return '<style>'.$originalTemplate->content_css.'</style>'.$originalTemplate->content_html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OriginalTemplate  $originalTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(OriginalTemplate $originalTemplate)
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;
        
        return view('admin.edit-template')->with('template', $originalTemplate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OriginalTemplate  $originalTemplate
     * @return \Illuminate\Http\Response
     */
    public function modify(OriginalTemplate $originalTemplate)
    {
        return view('modify-template')->with('template', $originalTemplate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OriginalTemplate  $originalTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OriginalTemplate $originalTemplate)
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;

        $validatedData = $request->validate([
            'name' => 'required', 'min:3',
            'content_html' => 'required',
            'content_css' => 'required',
        ]);

        $originalTemplate->update([
            'name' => $validatedData['name'],
            'content_html' => $validatedData['content_html'],
            'content_css' => $validatedData['content_css']
        ]);

        // preview image
        // 
        // if($request->hasFile('preview_image')):
        //     $originalTemplate->preview_image = 'hello';
        //     $originalTemplate->update();
        // endif;

        return redirect()->back()->withStatus('Template Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OriginalTemplate  $originalTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(OriginalTemplate $originalTemplate)
    {
        if(Auth::user()->type === 3):
            abort(403);
        endif;
        
        $originalTemplate->delete();

        return redirect()->route('original.template.index')->withStatus('Template Deleted Successfully');
    }
}
