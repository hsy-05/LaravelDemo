<?php
//消息
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate; ////////////

use Auth;         ///////
use App\Models\Home;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $home = Home::orderBy('id')->get();
        return view('admin.posts.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
            return view('admin.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

{
    $this->authorize('admin');

       // 如果路徑不存在，就自動建立
       if (!file_exists('uploads/home')) {
        mkdir('uploads/home', 0755, true);
    }

    $home = new Home;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = public_path() . '\uploads\home\\';
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $fileName);
    }
    else {
        $fileName = 'default.jpg';
    }


    $home->content_1 = $request->input('content_1');
    $home->content_2 = $request->input('content_2');
    $home->image = $fileName;
    $home->save();

    return redirect(route('admin.posts.index'));

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        $home = Home::find($id);
        return view('admin.posts.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('admin');
       // 如果路徑不存在，就自動建立
       if (!file_exists('uploads/home')) {
        mkdir('uploads/home', 0755, true);
    }

    $home = Home::find($id);

    if ($request->hasFile('image')) {
        // 先刪除原本的圖片
        if ($home->image != 'default.jpg')
            @unlink('uploads/home/' . $home->image);
        $file = $request->file('image');
        $path = public_path() . '\uploads\home\\';
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $fileName);

        $home->image = $fileName;
    }

    $home->content_1 = $request->input('content_1');
    $home->content_2 = $request->input('content_2');

    $home->save();

    return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $home = Home::find($id);
        if ($home->image != 'default.jpg')
            @unlink('uploads/home/' . $home->image);
        $home->delete();
        return redirect()->route('admin.posts.index');
    }
}
