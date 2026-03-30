<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * A user can create many bookings
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * A technician can be assigned to many bookings
     */
    public function assignedBookings()
    {
        return $this->hasMany(Booking::class, 'technician_id');
    }

    /**
     * A user can own multiple devices
     */
    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    /**
     * Activity logs created by the user
     */
    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}