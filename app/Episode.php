<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use BeyondCode\Comments\Traits\HasComments;

class Episode extends Model
{
    protected $fillable = ['tmdb_id', 'episode_number', 'name', 'overview', 'still_path', 'still_path_tv', 'vote_average', 'vote_count',
     'air_date','hasrecap','skiprecap_start_in','free'];


    protected $with = ['videos', 'substitles','downloads'];

    use HasComments;

    protected $casts = [
        'hasrecap' => 'int',
        'skiprecap_start_in' => 'int'

    ];

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class, 'season_id');
     }

public function videos() : HasMany {
        return $this->hasMany(SerieVideo::class);
     }


    public function downloads(): HasMany
    {
        return $this->hasMany(SerieDownload::class);
    }

public function substitles() : HasMany
    {
        return $this->hasMany(SerieSubstitle::class);
    }


}
