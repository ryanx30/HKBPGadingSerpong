<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use App\Models\Video;
use App\Models\MinistryImage;





class PageController extends Controller
{
    public function home()
    {
    
        $events = Event::all();
        return view('home', compact('events'));
    }

    public function service()
    {
        return view('service');
    }

    public function events()
    {
        // Ambil data event dari database
        $events = Event::paginate(5); // Ambil data dengan pagination
        return view('events', compact('events'));
    }

    public function media()
    {
        $videos = Video::all(); // Ambil semua data dari tabel videos
        return view('media', compact('videos'));
    }
    public function donation()
    {
        return view('donation');
    }

    public function about()
    {
        return view('about');
    }

    public function ministries()
    {
        $images = MinistryImage::all(); // Ambil semua gambar dari database
        return view('ministries', compact('images'));
    }

    
}