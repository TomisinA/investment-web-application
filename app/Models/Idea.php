<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    public function riskRating()
    {
        return $this->belongsTo(RiskRating::class, 'risk_rating_id');
    }

    public function majorSector()
    {
        return $this->belongsTo(Sector::class, 'major_sector_id');
    }

    public function minorSector()
    {
        return $this->belongsTo(Sector::class, 'minor_sector_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'idea_product', 'idea_id', 'product_id');
    }

    public function instruments() {
        return $this->belongsToMany(Instrument::class, 'idea_instrument', 'idea_id', 'instrument_id');
    }

    public function creator() {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
