<?php

namespace App\Livewire;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component {
    public $idea;
    public $voteCount;
    public $hasVoted;

    public function mount(Idea $idea, $voteCount) {
        $this->idea = $idea;
        $this->voteCount = $voteCount;
        $this->hasVoted = $idea->isVotedByUser(auth()->user());
    }

    public function render() {
        return view('livewire.idea-show');

        // can be done by
        // $user->vote($idea);
        // or
        // $idea->vote($user);
    }

    public function vote() {
        if (!auth()->check()) {
            return redirect(route('login'));
        }

        if ($this->hasVoted) {
            try {
                $this->idea->removeVote(auth()->user());
            } catch (VoteNotFoundException $e) {
                // Do nothing
            }
            $this->voteCount--;
            $this->hasVoted = false;
        } else {
            try {
                $this->idea->vote(auth()->user());
            } catch (DuplicateVoteException $e) {
                // Do nothing
            }
            $this->voteCount++;
            $this->hasVoted = true;
        }
    }
}
