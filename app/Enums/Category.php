<?php

namespace App\Enums;

enum Category: string
{
    case Minimal = 'minimal';
    case Modern = 'modern';
    case Classic = 'classic';
    case Utility = 'utility';
}
