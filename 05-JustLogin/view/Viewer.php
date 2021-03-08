<?php

namespace view;

class Viewer
{
    const viewerInterface = 0;
    const login = 1;
    public $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }
    public function display()
    {
        if ($this->type === 0) {
            header("Location:./login.php");
        } else if ($this->type === 1) {
            header("Location:./view.php");
        }
    }
}
