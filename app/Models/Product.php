<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'brand_id',
        'event_id',
        'price',
        'discount',
        'detail',
        'image',
        'in_stock',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // favorites
    public function isFavorited()
    {
        return $this->favorites()->where('user_id', auth()->id())->count();
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    // favorites
    public function isCarted()
    {
        return $this->carts()->where('user_id', auth()->id())->count();
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')
            ->withPivot('qty', 'price');
    }
}
