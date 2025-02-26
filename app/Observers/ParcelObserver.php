<?php

namespace App\Observers;

use App\Models\Parcel;
use App\Models\Parcel_History;
use Illuminate\Support\Facades\Auth;

class ParcelObserver
{
    /**
     * Handle the Parcel "created" event.
     */
    public function created(Parcel $parcel): void
    {
        Parcel_History::create([
            'parcel_id' => $parcel->id,
            'status' => $parcel->status,
            'operation' => 'created',
            'updated_by' => auth()->id(),
            'created_by_type' => auth()->check() ? get_class(auth()->user()) : null,
        ]);
    }

    /**
     * Handle the Parcel "updated" event.
     */
    public function updated(Parcel $parcel): void
    {
        Parcel_History::create([
            'parcel_id' => $parcel->id,
            'status' => $parcel->status,
            'operation' => 'updated',
            'updated_bt' => auth()->id(),
            'created_by_type' => auth()->check() ? get_class(auth()->user()) : null,
        ]);
    }

    /**
     * Handle the Parcel "deleted" event.
     */
    public function deleted(Parcel $parcel): void
    {
        Parcel_History::create([
            'parcel_id' => $parcel->id,
            'status' => $parcel->status,
            'operation' => 'deleted',
            'updated_by' => auth()->id(),
            'created_by_type' => auth()->check() ? get_class(auth()->user()) : null,
        ]);
    }

    /**
     * Handle the Parcel "restored" event.
     */
    public function restored(Parcel $parcel): void
    {
        //
    }

    /**
     * Handle the Parcel "force deleted" event.
     */
    public function forceDeleted(Parcel $parcel): void
    {
        //
    }
}
