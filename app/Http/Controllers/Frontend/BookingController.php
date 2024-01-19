<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Shift;
use App\Models\Sport;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\StoreRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($sports_name)
    {
        $sport = Sport::where('name', $sports_name)->firstOrFail();

        $shifts = Shift::get();

        $bookings = Booking::where('booking_date', now())->get();

        return view('frontend.booking', compact('sport', 'shifts', 'bookings'));
    }

    public function availableShifts(Request $request){
        $shifts = Shift::get();
        $booking_date = new Carbon($request->booking_date);
        $bookings = Booking::where('booking_date', $booking_date)->where('status', '!=', 3)->get();

        $times = $bookings->pluck('booking_times')->toArray();
        $only_booked_times = [];
        foreach($times as $time){
            $only_booked_times = array_merge($only_booked_times, $time);
        }

        $html = "";
        foreach ($shifts as $shift){
            $html .= <<<HTML
            <div class="card">
                <h1>$shift->name</h1>
                <div class="b-row">
            HTML;
            $start_time = $shift->start_time;
            $end_time = $shift->end_time;
            if($start_time < $end_time){
                while ($start_time < $end_time) {
                    $disabled = "";

                    if(in_array($start_time->format('H:i:s'), $only_booked_times)){
                        $disabled = "disabled";
                    }

                    $html .= <<<HTML
                    <div class="b-col">
                        <div class="article {$disabled}">
                            <input class="booking-times" data-price={$shift->hourly_rate} type="checkbox" name="booking_times[]" value="{$start_time->format('H:i:s')}" {$disabled}/>
                            <div>
                                <span>
                                    {$start_time->format('h:i a')} - {$start_time->addHour()->format('h:i a')}
                                </span>
                            </div>
                        </div>
                    </div>
                    HTML;
                }
            }else if($start_time > $end_time){
                while ($start_time > $end_time) {
                    $disabled = "";

                    if(in_array($start_time->format('H:i:s'), $only_booked_times)){
                        $disabled = "disabled";
                    }

                    $html .= <<<HTML
                    <div class="b-col">
                        <div class="article {$disabled}">
                            <input class="booking-times" data-price={$shift->hourly_rate} type="checkbox" name="booking_times[]" value="{$start_time->format('H:i:s')}" {$disabled}/>
                            <div>
                                <span>
                                    {$start_time->format('h:i a')} - {$start_time->subHour()->format('h:i a')}
                                </span>
                            </div>
                        </div>
                    </div>
                    HTML;
                }
            }
            $html .= <<<HTML
                </div>
            </div>
            HTML;
        }

        return $html;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $customer = Customer::where('phone', $request->phone)->orWhere('email', $request->email)->first();
        $sport = Sport::find($request->sport)->firstOrFail();

        if($customer === null){
            $customer = Customer::create($request->safe()->only([
                'name',
                'email',
                'phone',
            ]));
        }

        Booking::create([
            'customer_id' => $customer->id,
            'sport_id' => $sport->id,
            'booking_date' => $request->booking_day,
            'booking_times' => $request->booking_times,
            'total_amount' => $request->total_amount,
            'status' => 1
        ]);

        return redirect(route('success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
