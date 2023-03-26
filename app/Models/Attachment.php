<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attachment extends Model
{
    use HasFactory;

    /**
     * The inboxes that belong to the Attachment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function inboxes(): BelongsToMany
    {
        return $this->belongsToMany(Inbox::class, 'inbox_attachment', 'attachment_id', 'inbox_id');
    }
}
