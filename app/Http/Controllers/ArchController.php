<?php
namespace App\Http\Controllers;

use App\Models\Boards;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArchController extends Controller
{
    public function createBoard()
    {
        return view('create_board');
    }
    public function storeBoard(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:300',
            'fileInput' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // Max file size: 10MB (10240 KB)
        ]);

        try {
            DB::beginTransaction();
            // Get the uploaded file
            $file = $request->file('fileInput');
            // Generate a unique name for the file
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the storage directory
            $file->move(public_path('uploads'), $filename);

            // Save file details to the database
            $board = new Boards();
            $board->title = $request->title;
            $board->description = $request->description;
            $board->save();

            $story = new Story();
            $story->board_id = $board->id;
            $story->filename = $filename;
            $story->filepath = 'uploads/' . $filename; // Adjust the path as per your storage configuration
            $story->save();
            DB::commit();

            // Redirect or return a response
            return redirect('story')->with('success', 'Board Created Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Board Createion Failed'. $e->getMessage());

        }
    }

    public function showBoards()
    {
        $boards = Boards::with('stories')->orderBy('created_at', 'desc')->get();
        // Pass the fetched data to a view
        return view('board', compact('boards'));
    }


    public function board($id)
    {
        $board = Boards::with('stories')->where('id', $id)->orderBy('created_at', 'desc')->first();
        if(!$board) {
            abort(404);
        }
        return view('edit_board', compact('board'));
    }

    public function addStory(Request $request)
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'board_id' => 'required',
            'fileInput' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // Max file size: 10MB (10240 KB)
        ]);

        $board = Boards::where('id', $request->board_id)->first();
        if(!$board) {
            abort(404);
        }
        try {
            DB::beginTransaction();
            // Get the uploaded file
            $file = $request->file('fileInput');
            // Generate a unique name for the file
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the storage directory
            $file->move(public_path('uploads'), $filename);

            // Save file details to the database

            $story = new Story();
            $story->board_id = $request->board_id;
            $story->caption = $request->caption;
            $story->filename = $filename;
            $story->filepath = 'uploads/' . $filename; // Adjust the path as per your storage configuration
            $story->save();
            DB::commit();

            // Redirect or return a response
            return redirect('board/'.$request->board_id)->with('success', 'Story Added Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Add Story Failed'. $e->getMessage());

        }
    }

    public function deleteBoard($id)
    {

        $board = Boards::with('stories')->where('id', $id)->orderBy('created_at', 'desc')->first();
        if(!$board) {
            abort(404);
        }
        foreach($board->stories()->get() as $story) {
            if (Storage::exists($story->filepath)) {
                Storage::delete($story->filepath);
            }
        }
        $board->stories()->delete();
        $board->delete();

        return redirect('boards');
    }
    public function home()
    {
        return view('home');
    }

    public function clear()
    {
        Story::truncate();
        return redirect('/');
    }
}
