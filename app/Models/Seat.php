<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Seat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'seat_number'
    ];

    /**
     * Many to many relation to Booking model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'booked_seats');
    }

    /**
     * Many to many relation to Showtime model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function showtimes(): BelongsToMany
    {
        return $this->belongsToMany(Showtime::class, 'booked_seats');
    }
}
