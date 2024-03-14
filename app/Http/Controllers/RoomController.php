<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class RoomController extends Controller
{
    //
    public function room()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('room.room_page',compact('room_list'));
    }
    
    public function roomDetail()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('room.room_detail',compact('room_list'));
    }
    // public function searchRoom(Request $request)
    // {      

    //     $searchTerm = $request->input('search');
    //     $search_room_list = DB::table("room_style")
    //     ->where('room_style.name', 'like', '%' . $searchTerm . '%')
    //     ->Paginate(6); 
    //     return view('room.search_room', compact('search_room_list')); 
    

        
   
    public function searchRoom(Request $request)
    {
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        // Kiểm tra xem có phòng nào đang được book trong thời gian này không
        $bookings = DB::table('booking_details')
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->where('check_in', '>=', $checkIn)
                        ->where('check_in', '<', $checkOut);
                })
                ->orWhere(function ($q) use ($checkIn, $checkOut) {
                    $q->where('check_out', '>', $checkIn)
                        ->where('check_out', '<=', $checkOut);
                });
            })
            ->get();

        // Lấy danh sách phòng của room_style_id
        $rooms = DB::table('room_style')->get();

        // Lọc ra danh sách phòng trống
        $availableRooms = $rooms->filter(function ($room) use ($bookings) {
            foreach ($bookings as $booking) {
                if ($room->room_style_id == $booking->room_style_id) {
                    return false;
                }
            }
            return true;
        });
        return view('room.search_room', compact('availableRooms')); 
        // return response()->json(['available_rooms' => $availableRooms]);
    

        
    }
}
