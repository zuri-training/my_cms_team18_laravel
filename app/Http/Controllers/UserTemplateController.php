<?php

namespace App\Http\Controllers;

use App\Models\OriginalTemplate;
use App\Models\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.all-template')->with('templates',  UserTemplate::where('user', Auth::id())->latest()->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required', 'min:3', 'unique:user_templates',
            'content_html' => 'required',
            'content_css' => 'required'
        ]);

        $user_template = UserTemplate::create([
            'name' => $validatedData['name'],
            'content_html' => $validatedData['content_html'],
            'content_css' => $validatedData['content_css'],
            'user' => Auth::id(),
        ]);

        return redirect()->back()->withInput()->withStatus('Templated has been saved to your dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTemplate  $userTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(UserTemplate $userTemplate)
    {
        if($userTemplate->user !== Auth::id()):
            abort(403);
        endif;

        return view('user.preview-template')->with('template', $userTemplate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTemplate  $userTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTemplate $userTemplate)
    {
        if($userTemplate->user !== Auth::id()):
            abort(403);
        endif;

        return $userTemplate;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserTemplate  $userTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTemplate $userTemplate)
    {
        if($userTemplate->user !== Auth::id()):
            abort(403);
        endif;

        die('update in progress');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTemplate  $userTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTemplate $userTemplate)
    {
        if($userTemplate->user !== Auth::id()):
            abort(403);
        endif;

        $userTemplate->delete();
    }
}
