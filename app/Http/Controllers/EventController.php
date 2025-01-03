<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        // Ambil data event berdasarkan ID
        $event = Event::findOrFail($id);

        // Tampilkan halaman event-register dengan data event
        return view('event-register', compact('event'));
    }
}