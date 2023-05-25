<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Region;
use App\Models\Sector;
use App\Models\Country;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Instrument;
use App\Models\RiskRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IdeaAssignation;

class IdeasController extends Controller
{
    public function index() {
        if (auth()->user()->role == 1) {
            $ideas = Idea::where('creator_id', auth()->id())->get();
            return view('ideas.creator_index', compact('ideas'));
        } else if (auth()->user()->role == 2) {
            $idea_assignations = IdeaAssignation::where('investor_id', auth()->id())
                ->where('status', 'suggested')
                ->get();
            $ideas = array();
            foreach($idea_assignations as $assignation) {
                array_push($ideas, $assignation->idea);
            }
            return view('ideas.investor_index', compact('ideas'));
        } else {
            $ideas = Idea::all();
            return view('ideas.manager_index', compact('ideas'));
        }
    }

    public function show(Idea $idea) {
        return view('ideas.show', compact('idea'));
    }

    public function create() {
        $regions = Region::all();
        $countries = Country::all();
        $risk_ratings = RiskRating::all();
        $products = Product::all();
        $sectors = Sector::all();
        $currencies = Currency::all();
        $instruments = Instrument::all();

        return view('ideas.create', compact('regions', 'countries', 'risk_ratings', 'products', 'sectors', 'currencies', 'instruments'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'abstract' => 'required',
            'risk_rating' => 'required',
            'products' => 'required',
            'content' => 'required',
            'instruments' => 'required',
            'major_sector' => 'required',
            'minor_sector' => 'required',
            'region' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'expiry_date' => 'required|date',
        ]);
    
        $idea = new Idea();

        $idea->title = $request->title;
        $idea->abstract = $request->abstract;
        $idea->risk_rating_id = $request->input('risk_rating');
        $idea->content = $request->content;
        $idea->major_sector_id = $request->input('major_sector');
        $idea->minor_sector_id = $request->input('minor_sector');
        $idea->region_id = $request->input('region');
        $idea->country_id = $request->input('country');
        $idea->currency_id = $request->input('currency');
        $idea->expiry_date = $request->input('expiry_date');
        $idea->creator_id = auth()->id();

        $idea->save();

        $idea->products()->sync($request->products);
        $idea->instruments()->sync($request->instruments);

        return redirect('/');
    }

    public function edit(Idea $idea) {        
        $regions = Region::all();
        $countries = Country::all();
        $risk_ratings = RiskRating::all();
        $products = Product::all();
        $sectors = Sector::all();
        $currencies = Currency::all();
        $instruments = Instrument::all();

        return view('ideas.edit', compact('idea', 'regions', 'countries', 'risk_ratings', 'products', 'sectors', 'currencies', 'instruments'));
    }

    public function update(Request $request, Idea $idea) {
        $request->validate([
            'title' => 'required|max:255',
            'abstract' => 'required',
            'risk_rating' => 'required|integer',
            'content' => 'required',
            'major_sector' => 'required',
            'minor_sector' => 'required',
            'region' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'expiry_date' => 'required|date',
        ]);
    
        $idea->title = $request->title;
        $idea->abstract = $request->abstract;
        $idea->risk_rating_id = $request->input('risk_rating');
        $idea->content = $request->content;
        $idea->major_sector_id = $request->input('major_sector');
        $idea->minor_sector_id = $request->input('minor_sector');
        $idea->region_id = $request->input('region');
        $idea->country_id = $request->input('country');
        $idea->currency_id = $request->input('currency');
        $idea->expiry_date = $request->input('expiry_date');

        $idea->save();

        $idea->products()->sync($request->products);
        $idea->instruments()->sync($request->instruments);

        return redirect('/');
    }

    public function destroy(Idea $idea) {
        $idea->delete();

        return redirect('/');
    }
}
