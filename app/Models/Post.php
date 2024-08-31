<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
//secara default akan memetakan database Model 
class Post Extends Model
{  
    protected $with = ['author', 'category'];
    use HasFactory;
    protected $fillable= [
     'body', 'title', 'slug', 'author_id'
    ];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
        $filters['search'] ?? false,
        fn ($query, $search) =>
        $query->where('title', 'like', '%'.$search.'%')
        );
        $query->when(
        $filters['category'] ?? false,
        fn ($query, $category) =>
        $query->whereHas('category', fn($query)=>
        $query->where('slug', $category))
        );
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn($query) =>
            $query->where('username', $author))
        );
    }
}