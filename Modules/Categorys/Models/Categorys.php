<?php

namespace Modules\Categorys\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * The Model is Defined for Category.
 *
 * PHP version 7.1.3
 *
 * @category  PM
 * @package   Modules\Categorys
 * @author    Vipul Patel <vipul@chetsapp.com>
 * @copyright 2019 Chetsapp Group
 * @license   Chetsapp Private Limited
 * @version   Release: @1.0@
 * @link      http://chetsapp.com
 * @since     Class available since Release 1.0
 */
class Categorys extends Model
{

    const MODULE_NAME = 'Categorys';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'po_types_indentify',
        'pages_id',
        'parent_id',
        'avatar',
        'active',
        'created_by_id',
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $appends = ['is_overdue'];

    /**
     * Instantiate a new model instance.
     *
     * @param Array $attributes [object]
     *
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        $this->table = 'web_po_cates';
    }

}
