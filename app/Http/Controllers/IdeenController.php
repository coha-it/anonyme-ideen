<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Idea;
use App\Category;


class IdeenController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function ideas() {
        return Idea::with('categories')->orderBy('updated_at', 'desc')->get()->toArray();
    }

    public function categories() {
        return Category::get()->toArray();
    }

    public function createIdea(Request $request) {
        $this->validate($request, [
            'idea' => 'required|unique:ideas,text',
        ]);

        $idea = Idea::create([
            'text' => $request->idea
        ]);

        if($request->categories) {
            foreach ($request->categories as $id => $active) {
                if($active) {
                    $idea->categories()->attach($id);
                }
            }
        }

        return $this->ideas();
    }
}
