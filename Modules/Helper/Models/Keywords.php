<?php

namespace Modules\Helper\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Keywords
 *
 * The Model is Defined for Keywords.
 *
 * PHP version 7.1.3
 *
 * @category  PM
 * @package   Modules\Helper
 * @author    Vipul Patel <vipul@chetsapp.com>
 * @copyright 2019 Chetsapp Group
 * @license   Chetsapp Private Limited
 * @version   Release: @1.0@
 * @link      http://chetsapp.com
 * @since     Class available since Release 1.0
 */
class Keywords extends Model
{

    const MODULE_NAME = 'Keywords';

    protected $fillable = [
        'id',
        'value'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        $this->table = 'web_keywords';
    }

}
