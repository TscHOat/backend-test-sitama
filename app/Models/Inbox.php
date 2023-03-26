<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Inbox extends Model
{
    use HasFactory;
    protected
        $fillable = [
            'title',
            'description',
            'attachment',
            'department_id',
            'assign_id',
            'cc_id',
        ];

    /**
     * Get the department that owns the Inbox
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the assigned that owns the Inbox
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assign(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assign_id', 'id');
    }

    /**
     * Get the cc that owns the Inbox
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cc(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cc_id', 'id');
    }
}
