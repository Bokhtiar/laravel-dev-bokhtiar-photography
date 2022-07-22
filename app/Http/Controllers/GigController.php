<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GigController extends Controller
{
    public function index()
    {
        try {
            $gigs = Gig::where('user_id', Auth::id())->get();
            return view('dashboard.modules.gig.index', compact('gigs'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Gig::query()->Validation($request->all());
        if($validated){
            try{
                DB::beginTransaction();
                $image = Gig::query()->Image($request);
                $gig = Gig::create([
                    'title' => $request->title,
                    'user_id' => Auth::id(),
                    'body' => $request->body,
                    'image' => json_encode($image)
                ]);

                if (!empty($gig)) {
                    DB::commit();
                    return redirect()->route('gigs.index')->with('success','Gig Created successfully!');
                }
                throw new \Exception('Invalid About Information');
            }catch(\Exception $ex){
                return back()->withError($ex->getMessage());
                DB::rollBack();
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $edit = Service::query()->FindID($id);
        return view('admin.service.createOrUpdate', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = Service::query()->Validation($request->all());
        if($validated){
            try{
                $update = Service::query()->FindID($id);
                DB::beginTransaction();
                $reqImage = $request->image;
                if($reqImage){
                    $newimage = Service::query()->Image($request);
                }else{
                    $image = $update->image;
                }

                $serviceU = $update->update([
                    'name' => $request->name,
                    'body' => $request->body,
                    'image' => $reqImage ? json_encode($newimage) : $image,
                ]);

                if (!empty($serviceU)) {
                    DB::commit();
                    return redirect()->route('admin.service.index')->with('success','Service Created successfully!');
                }
                throw new \Exception('Invalid About Information');
            }catch(\Exception $ex){
                return back()->withError($ex->getMessage());
                DB::rollBack();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Service::query()->FindID($id)->delete();
            return redirect()->route('admin.service.index')->with('success','Service Delete successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
