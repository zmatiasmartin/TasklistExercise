<?php

namespace App\Observers;

use app\Post;
use Uuid;

class PostObserver {

    public function creating(Post $post) {
        $post->uuid = Uuid::generate()->string;
    }

    public function getRouteKeyName() {
        return 'uuid';
    }

}
