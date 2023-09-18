<?php

namespace App\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaIndex extends Component {
    public $idea;
    public $voteCount;
    public $hasVoted = false;

    public function mount(Idea $idea, $voteCount) {
        $this->idea = $idea;
        $this->voteCount = $voteCount;
        $this->hasVoted = $idea->voted_by_user;
    }

    public function render() {
        return view('livewire.idea-index');
    }
}
