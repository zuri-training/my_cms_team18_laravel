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
        return UserTemplate::where('user', Auth::id())->latest()->get();
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
            'template' => ['required', 'exists:original_templates,id'],
            'html' => 'required',
            'css' => 'required'
        ]);

        $user_template = UserTemplate::create([
            'name' => OriginalTemplate::findOrFail($validatedData['template'])->first()->name,
            'content' => $validatedData['css'].'<br/>'.$validatedData['html'],
            'original_template' => $validatedData['template'],
            'user' => Auth::id(),
        ]);

        // change this to redirect to user template edit route (logged in)
        return redirect()->back()->withStatus('Templated has been saved to your dashboard');
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

        return $userTemplate;
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
