<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class Counter extends Component
{
    #[Locked]
    public $count = 1;

    public function increment()
    {
        $this->authorize('increment', $count);
        $this->count++;
    }

    public function decrement()
    {
        $this->authorize('decrement', $count);
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

/*
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Relation::morphMap([
            'post' => 'App/'
        ]);
    }

}
*/