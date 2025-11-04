<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    /** @use HasFactory<\Database\Factories\PromptFactory> */
    use HasFactory;
    use HasUlids;

    /**
     * The model attributes that are not mass assignable.
     */
    protected $guarded = [];

    /**
     * The model attributes that are unique IDs.
     */
    public function uniqueIds(): array
    {
        return ["ulid"];
    }
}
