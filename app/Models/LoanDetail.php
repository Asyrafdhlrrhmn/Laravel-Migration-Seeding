<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    protected $table = 'loan_detail'; // ⚠️ karena nama tabel tidak plural

    protected $fillable = [
        'loan_id',
        'book_id',
        'is_return'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function returns()
    {
        return $this->hasOne(Returns::class, 'loan_detail_id', 'id');
    }
}