<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Parsedown;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        $parsedNotes = $notes->map(function ($note) {
            $note->content = Parsedown::instance()->text($note->content);
            return $note;
        });

        return view('notes', compact('parsedNotes'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(NoteRequest $request)
    {
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('notes')->with('success', 'Note created successfully.');
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('edit', compact('note'));
    }

    public function update(NoteRequest $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->title = $request->title;
        $note->content = Parsedown::instance()->text($request->content);
        $note->save();

        return redirect()->route('notes')->with('status', 'Note updated successfully.');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes')->with('status', 'Note deleted successfully.');
    }
}
