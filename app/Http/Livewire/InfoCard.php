<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InfoCard extends Component
{
    public $title;
    public $bg_color;
    public $description;
    public $image_url;

    public function mount($title, $description, $bg_color, $image_url)
    {
        $this->title = $title;
        $this->description = $description;
        $this->bg_color = $bg_color;
        $this->image_url = $image_url;
    }

    public function render()
    {
        return view('livewire.info-card');
    }
}
