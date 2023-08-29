<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lancamento;


class CentroCusto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'centro_custo';
    protected $primaryKey = 'id_centro_custo';
    protected $date = [
        'created_at',
        'updated_at',
        'delete_at'
    ];

    protected $fillalble = [
         'centro_custo'
    ];

    /**
     * -----------------------------
     * | Relacionamentos
     * |
     * -----------------------------
     */

     public function lancamentos(){
        return $this->belongsTo(Lancamento::class,'id_centro_custo','id_centro_custo',);
     }
}
