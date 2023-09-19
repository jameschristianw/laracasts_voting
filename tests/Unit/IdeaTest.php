<?php

namespace Tests\Unit;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IdeaTest extends TestCase {
    use RefreshDatabase;

    /** @test */
    public function can_check_if_idea_is_voted_for_by_user() {
        $userA = User::factory()->create();
        $userB = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $userA->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        Vote::factory()->create([
            'idea_id' => $ideaOne->id,
            'user_id' => $userA->id
        ]);

        $this->assertTrue($ideaOne->isVotedByUser($userA));
        $this->assertFalse($ideaOne->isVotedByUser($userB));
        $this->assertFalse($ideaOne->isVotedByUser(null));
    }

    /** @test */
    public function user_can_vote_for_idea() {
        $userA = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $userA->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        $this->assertFalse($ideaOne->isVotedByUser($userA));
        $ideaOne->vote($userA);
        $this->assertTrue($ideaOne->isVotedByUser($userA));
    }

    /** @test */
    public function user_can_unvote_an_idea() {
        $userA = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $userA->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        Vote::factory()->create([
            'idea_id' => $ideaOne->id,
            'user_id' => $userA->id
        ]);

        $this->assertTrue($ideaOne->isVotedByUser($userA));
        $ideaOne->removeVote($userA);
        $this->assertFalse($ideaOne->isVotedByUser($userA));
    }

    /** @test */
    public function voting_for_an_idea_thats_already_voted_throws_exception() {
        $userA = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $userA->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        Vote::factory()->create([
            'idea_id' => $ideaOne->id,
            'user_id' => $userA->id
        ]);

        $this->expectException(DuplicateVoteException::class);
        $ideaOne->vote($userA);
    }

    /** @test */
    public function removing_a_vote_that_doesnt_exists_throw_exception() {
        $userA = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $userA->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        $this->expectException(VoteNotFoundException::class);
        $ideaOne->removeVote($userA);
    }
}
