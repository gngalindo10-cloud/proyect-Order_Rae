<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produccion
 * 
 * @property int $ID_PRODUCCION
 * @property string $Codigo_producto
 * @property string $Categoria_producto
 * @property string $Material_producto
 * @property string $Tipo_de_producto
 * @property string $Color_producto
 * @property int $Cantidad_producto
 * @property string $Estado_producto
 * @property Carbon $Created_at
 * @property Carbon $Updated_at
 * @property int $usuarios_id
 * @property int $producto_id
 * 
 * @property Usuario $usuario
 * @property Producto $producto
 *
 * @package App\Models
 */
class Produccion extends Model
{
	protected $table = 'produccion';
	protected $primaryKey = 'ID_PRODUCCION';
	public $timestamps = true;
	const CREATED_AT = 'Created_at';
	const UPDATED_AT = 'Updated_at';


	protected $casts = [
		'Cantidad_producto' => 'int',
		'Created_at' => 'datetime',
		'Updated_at' => 'datetime',
		'usuarios_id' => 'int',
		'producto_id' => 'int'
	];

	protected $fillable = [
		'Referencia_producto',
		'Categoria_producto',
		'Material_producto',
		'Color_producto',
		'Cantidad_producto',
		'Estado_producto',
		'usuarios_id',
		'producto_id'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id', 'ID_USUARIO');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'producto_id', 'ID_PRODUCTO');
	}
}
