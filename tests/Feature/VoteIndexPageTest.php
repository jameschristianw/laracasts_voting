<?php

namespace Tests\Feature;

use App\Livewire\IdeaIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class VoteIndexPageTest extends TestCase {
    use RefreshDatabase;

    /** @test */
    public function index_page_contains_idea_index_livewire_component() {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => "Open", 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'status_id' => $statusOpen->id,
            "category_id" => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea'
        ]);

        $this->get(route('idea.index'))
            ->assertSeeLivewire('idea-index');
    }


    /** @test */
    public function index_page_correctly_recieves_vote_count() {
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
            'user_id' => $userA->id,
        ]);

        Vote::factory()->create([
            'idea_id' => $ideaOne->id,
            'user_id' => $userB->id,
        ]);

        $this->get(route('idea.index', $ideaOne))
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->first()->votes_count == 2;
            });
    }

    /** @test */
    public function votes_count_shows_correctly_on_index_page_livewire_component() {
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

        Livewire::test(IdeaIndex::class, [
            'idea' => $ideaOne,
            'voteCount' => 5,
        ])
            ->assertSet('voteCount', 5);
        // ->assertSeeHtml('<div class="font-semibold text-2xl">5</div>')
        // ->assertSeeHtml('<div class="text-sm font-bold leading-none">5</div>');
    }


    /** @test */
    public function user_who_is_logged_in_shows_voted_if_idea_already_voted_for() {
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

        $response = $this->actingAs($userA)->get(route('idea.index'));

        $ideaWithVotes = $response['ideas']->items()[0];

        Livewire::actingAs($userA)
            ->test(IdeaIndex::class, [
                'idea' => $ideaWithVotes,
                'voteCount' => 5,
            ])
            ->assertSet('hasVoted', true)
            ->assertSee('Voted');
    }
}
