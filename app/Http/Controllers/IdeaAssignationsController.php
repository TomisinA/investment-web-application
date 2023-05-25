<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\IdeaAssignation;
use App\Http\Controllers\Controller;

class IdeaAssignationsController extends Controller
{
    public function investors() {
        $investors = User::where('role', '2')->get();
        $ideas = Idea::all();
        return view('idea_assignations.investors', compact("investors", "ideas"));
    }

    public function store(Request $request) {
        foreach ($request->input('idea_id') as $idea_id) {
            $idea_assignation = new IdeaAssignation();
            $idea_assignation->investor_id = $request->input('investor_id');
            $idea_assignation->idea_id = $idea_id;
            $idea_assignation->status = 'suggested';
            $idea_assignation->save();
        }

        return redirect('/');
    }

    public function assignations() {
        $assignations = IdeaAssignation::all();
        return view('idea_assignations.assignations', compact("assignations"));
    }

    public function accepted() {
        $idea_assignations = IdeaAssignation::where('investor_id', auth()->id())
            ->where('status', 'accepted')
            ->get();
        $ideas = array();
        foreach($idea_assignations as $assignation) {
            array_push($ideas, $assignation->idea);
        }
        return view('idea_assignations.rejected_ideas', compact("ideas"));
    }

    public function rejected() {
        $idea_assignations = IdeaAssignation::where('investor_id', auth()->id())
            ->where('status', 'rejected')
            ->get();
        $ideas = array();
        foreach($idea_assignations as $assignation) {
            array_push($ideas, $assignation->idea);
        }
        return view('idea_assignations.rejected_ideas', compact("ideas"));
    }

    public function accept(Idea $idea) {
        $assignation = IdeaAssignation::where('idea_id', $idea->id)
            ->where('investor_id', auth()->id())
            ->first();

        $assignation->status = 'accepted';
        $assignation->save();

        return redirect('/');
    }

    public function reject(Idea $idea) {
        $assignation = IdeaAssignation::where([
            'idea_id' => $idea->id,
            'user_id' => auth()->id()
        ]);

        $assignation->status = 'rejected';
        $assignation->save();

        return redirect('/');
    }
}
