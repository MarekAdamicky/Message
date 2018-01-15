<?php

namespace Adamicky\Message;

use Illuminate\Support\Collection;

class Message
{
    protected $info = null;
    protected $error = null;
    protected $warning = null;
    protected $success = null;

    public function info(String $text)
    {
        $this->info[] = $text;
    }

    public function error(String $text)
    {
        $this->error[] = $text;
    }

    public function warning(String $text)
    {
        $this->warning[] = $text;
    }

    public function success(String $text)
    {
        $this->success[] = $text;
    }

    public function getMessages(): Collection
    {
        $messages = null;

        if ($this->info) $messages['info'] = $this->info;
        if ($this->error) $messages['error'] = $this->error;
        if ($this->warning) $messages['warning'] = $this->warning;
        if ($this->success) $messages['success'] = $this->success;

        return collect($messages);
    }
}
