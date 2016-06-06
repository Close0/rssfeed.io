<?php

namespace App\Http;

class Flash
{
    public function create($title, $message, $level)
    {
        return session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'level' => $level,
        ]);
    }

    public function overlay($title, $message, $level = 'success')
    {
        return session()->flash('flash_message_overlay', [
            'title' => $title,
            'message' => $message,
            'level' => $level,
        ]);
    }

    public function __call($level, $args)
    {
        // We'll need to pass along the level since that's the method we're catching
        $args['level'] = $level;

        // Set the session flash data by calling "create" with the arguments
        call_user_func_array([$this, "create"], $args);
    }
}
