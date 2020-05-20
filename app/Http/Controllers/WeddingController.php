<?php

namespace App\Http\Controllers;

use App\Wedding;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wedding::where('user_id', Auth::user()->id)->first();

        $check = Wedding::where('user_id', Auth::user()->id)->count();

        return view('wedding.index', [
            'data' => $data,
            'check' => $check
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wedding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'groom' => ['required', 'string', 'max:255'],
            'bride' => ['required', 'string', 'max:255'],
            'love_story' => ['required', 'string', 'max:255'],
            'wedding_info' => ['required', 'string', 'max:255'],
            'ceremony_place' => ['required', 'string', 'max:255'],
            'ceremony_address' => ['required', 'string', 'max:255'],
            'reception_place' => ['required', 'string', 'max:255'],
            'reception_address' => ['required', 'string', 'max:255'],
            'party_place' => ['required', 'string', 'max:255'],
            'party_place' => ['required', 'string', 'max:255'],
            'image_1' => ['required', 'image', 'max:2048'],
            'image_2' => ['required', 'image', 'max:2048'],
            'image_3' => ['required', 'image', 'max:2048'],
            'image_4' => ['required', 'image', 'max:2048'],
            'hero_image' => ['required', 'image', 'max:2048'],
            'love_story_image' => ['required', 'image', 'max:2048'],
        ]);

        $validationMarried = Wedding::where('user_id', Auth::user()->id)->count();

        if ($validationMarried == 0) {
            $imageName1 = time() . request()->hero_image->getClientOriginalExtension();
            $imageName2 = time() . request()->love_story_image->getClientOriginalExtension();
            $imageName3 = time() . request()->image_1->getClientOriginalExtension();
            $imageName4 = time() . request()->image_2->getClientOriginalExtension();
            $imageName5 = time() . request()->image_3->getClientOriginalExtension();
            $imageName6 = time() . request()->image_4->getClientOriginalExtension();

            request()->hero_image->move(public_path() . '/upload/users/wedding', $imageName1);
            request()->love_story_image->move(public_path() . '/upload/users/wedding', $imageName2);
            request()->image_1->move(public_path() . '/upload/users/wedding', $imageName3);
            request()->image_2->move(public_path() . '/upload/users/wedding', $imageName4);
            request()->image_3->move(public_path() . '/upload/users/wedding', $imageName5);
            request()->image_4->move(public_path() . '/upload/users/wedding', $imageName6);

            $weddingdate = date('Y-m-d', strtotime($request->wedding_date));
            $ceremony = date('Y-m-d', strtotime($request->ceremony_date));
            $reception = date('Y-m-d', strtotime($request->reception_date));
            $party = date('Y-m-d', strtotime($request->party_date));

            Wedding::insert([
                'user_id' => Auth::user()->id,
                'groom' => $request->groom,
                'bride' => $request->bride,
                'wedding_date' => $weddingdate,
                'hero_image' => $imageName1,
                'love_story' => $request->love_story,
                'love_story_image' => $imageName2,
                'image_1' => $imageName3,
                'image_2' => $imageName4,
                'image_3' => $imageName5,
                'image_4' => $imageName6,
                'wedding_info' => $request->wedding_info,
                'ceremony_date' => $ceremony,
                'ceremony_place' => $request->ceremony_place,
                'ceremony_address' => $request->ceremony_address,
                'reception_date' => $reception,
                'reception_place' => $request->reception_place,
                'reception_address' => $request->reception_address,
                'party_date' => $party,
                'party_place' => $request->party_place,
                'party_address' => $request->party_address,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('wedding.create')->with(['status' => 'success', 'message' => 'Wedding successfully created']);
        } else {
            return redirect()->route('wedding.create')->with(['status' => 'danger', 'message' => 'Wedding already created']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Wedding::where('id', $id)->first();

        return view('display.index', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Wedding::where('id', $id)->first();

        return view('wedding.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'groom' => ['required', 'string', 'max:255'],
            'bride' => ['required', 'string', 'max:255'],
            'love_story' => ['required', 'string', 'max:255'],
            'wedding_info' => ['required', 'string', 'max:255'],
            'ceremony_place' => ['required', 'string', 'max:255'],
            'ceremony_address' => ['required', 'string', 'max:255'],
            'reception_place' => ['required', 'string', 'max:255'],
            'reception_address' => ['required', 'string', 'max:255'],
            'party_place' => ['required', 'string', 'max:255'],
            'party_place' => ['required', 'string', 'max:255'],
            'image_1' => ['required', 'image', 'max:2048'],
            'image_2' => ['required', 'image', 'max:2048'],
            'image_3' => ['required', 'image', 'max:2048'],
            'image_4' => ['required', 'image', 'max:2048'],
            'hero_image' => ['required', 'image', 'max:2048'],
            'love_story_image' => ['required', 'image', 'max:2048'],
        ]);

        $imageName1 = time() . request()->hero_image->getClientOriginalExtension();
        $imageName2 = time() . request()->love_story_image->getClientOriginalExtension();
        $imageName3 = time() . request()->image_1->getClientOriginalExtension();
        $imageName4 = time() . request()->image_2->getClientOriginalExtension();
        $imageName5 = time() . request()->image_3->getClientOriginalExtension();
        $imageName6 = time() . request()->image_4->getClientOriginalExtension();

        request()->hero_image->move(public_path() . '/upload/users/wedding', $imageName1);
        request()->love_story_image->move(public_path() . '/upload/users/wedding', $imageName2);
        request()->image_1->move(public_path() . '/upload/users/wedding', $imageName3);
        request()->image_2->move(public_path() . '/upload/users/wedding', $imageName4);
        request()->image_3->move(public_path() . '/upload/users/wedding', $imageName5);
        request()->image_4->move(public_path() . '/upload/users/wedding', $imageName6);

        $weddingdate = date('Y-m-d', strtotime($request->wedding_date));
        $ceremony = date('Y-m-d', strtotime($request->ceremony_date));
        $reception = date('Y-m-d', strtotime($request->reception_date));
        $party = date('Y-m-d', strtotime($request->party_date));

        $data = Wedding::where('id', $id);

        $data->update([
            'user_id' => Auth::user()->id,
            'groom' => $request->groom,
            'bride' => $request->bride,
            'wedding_date' => $weddingdate,
            'hero_image' => $imageName1,
            'love_story' => $request->love_story,
            'love_story_image' => $imageName2,
            'image_1' => $imageName3,
            'image_2' => $imageName4,
            'image_3' => $imageName5,
            'image_4' => $imageName6,
            'wedding_info' => $request->wedding_info,
            'ceremony_date' => $ceremony,
            'ceremony_place' => $request->ceremony_place,
            'ceremony_address' => $request->ceremony_address,
            'reception_date' => $reception,
            'reception_place' => $request->reception_place,
            'reception_address' => $request->reception_address,
            'party_date' => $party,
            'party_place' => $request->party_place,
            'party_place' => $request->party_address,
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('wedding.create')->with(['status' => 'success', 'message' => 'Wedding successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wedding::where('id', $id)->delete();

        return redirect()->route('wedding.create')->with(['status' => 'success', 'message' => 'Wedding successfully deleted']);
    }
}
