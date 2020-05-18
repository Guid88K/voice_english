<?php

namespace App\Http\Controllers;

use App\Speak;
use Illuminate\Http\Request;
use DomDocument;

class SpeakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $speak = Speak::all();
        return view('speak.speak', ['speak' => $speak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('speak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $speak = new Speak();
        $speak->title = $request->title;
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image = $file->getClientOriginalName();
        }
        if ($request->file('p_image') != null) {
            $file = $request->file('p_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image_pronatop = $file->getClientOriginalName();
        }
        if ($request->file('d_image') != null) {
            $file = $request->file('d_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image_deutaron = $file->getClientOriginalName();
        }
        if ($request->file('t_image') != null) {
            $file = $request->file('t_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image_trunatop = $file->getClientOriginalName();
        }
        if ($request->file('a_image') != null) {
            $file = $request->file('a_image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image_axromatopsia = $file->getClientOriginalName();
        }
        $detail = $request->input('detail');
        $dom = new DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "/upload/" . time() . $k . '.png';
            $picture = $image_name;
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);

        }
        $speak->content = $detail;
        $speak->save();
        return redirect('/admin/english');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $speak = Speak::find($id);
        return view('speak.show', ['speak' => $speak]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $speaks = Speak::find($id);
        return view('speak.edit', compact('speaks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $speak = Speak::find($id);
        $speak->title = $request->title;
        if ($request->file('image') == null) {
            $file = $request->file('image');
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());
            $speak->image = $file->getClientOriginalName();
        }

        $detail = $request->input('detail');
        $dom = new DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = "/upload/" . time() . $k . '.png';
            $picture = $image_name;
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);

        }
        $speak->content = $detail;
        $speak->save();
        return redirect('/admin/english');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $speak = Speak::find($id);
        $speak->delete();
        return redirect('admin/english');
    }
}
