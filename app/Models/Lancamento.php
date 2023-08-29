<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{Tipo, CentroCusto, User };
use PhpParser\Builder\Function_;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Lancamento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lancamentos';
    protected $primaryKey = 'id_lancamento';
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
        'vencimento'
    ];

    protected $fillable = [
        'id_user',
        'id_tipo',
        'id_centro_custo',
        'valor',
        'vencimento',
        'descricao',
        'anexo'
    ];

    protected $cast = [
        'vencimento' => 'date',
        'valor' => 'decimal'
    ];

    /**
     * ----------------------------
     * | RELACIONAMENTOS
     * | https://laravel.com/docs/10.x/eloquent-relationships
     * ----------------------------
     */
    public function tipo(){
        return $this->belongsTo(Tipo::class, 'id_tipo','id_tipo');
    }

    public function centroCusto(){
        return $this->belongsTo(CentroCusto::class,'id_centro_custo','id_centro_custo');
    }

    public function usuario(){
        return $this->belongsTo(User::class,'id','id_user');
    }

    /**
     * ----------------------------
     * | MUTATOR
     * | https://laravel.com/docs/10.x/eloquent-mutators
     * ----------------------------
     */

     protected function descricao(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value),
        );
    }

     /**
      * ---------------------------
      *|
      *---------------------------=
      */
}
