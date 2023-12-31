<?php

namespace Tests\Feature;

use App\Livewire\IdeaIndex;
use App\Livewire\IdeasIndex;
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
    public function ideas_index_livewire_component_correctly_recieves_vote_count() {
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

        Livewire::test(IdeasIndex::class)
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->first()->votes_count == 2;
            });

        // $this->get(route('idea.index', $ideaOne))
        //     ->assertViewHas('ideas', function ($ideas) {
        //         return $ideas->first()->votes_count == 2;
        //     });
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

        $ideaOne->votes_count = 1;
        $ideaOne->voted_by_user = 1;

        Livewire::actingAs($userA)
            ->test(IdeaIndex::class, [
                'idea' => $ideaOne,
                'voteCount' => 5,
            ])
            ->assertSet('hasVoted', true)
            ->assertSee('Voted');
    }

    /** @test */
    public function user_who_is_not_logged_in_is_redirected_to_login_page_when_tryimng_to_vote() {
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
            ->call('vote')
            ->assertRedirect(route('login'));
    }


    /** @test */
    public function user_who_is_logged_can_vote_for_idea() {
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

        $this->assertDatabaseMissing('votes', [
            'user_id' => $userA->id,
            'idea_id' => $ideaOne->id
        ]);

        Livewire::actingAs($userA)
            ->test(IdeaIndex::class, [
                'idea' => $ideaOne,
                'voteCount' => 5,
            ])
            ->call('vote')
            ->assertSet('voteCount', 6)
            ->assertSet('hasVoted', true)
            ->assertSee('Voted');

        $this->assertDatabaseHas('votes', [
            'user_id' => $userA->id,
            'idea_id' => $ideaOne->id
        ]);
    }

    /** @test */
    public function user_who_is_logged_in_can_unvote_an_idea() {
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
            'user_id' => $userA->id,
            'idea_id' => $ideaOne->id
        ]);

        $ideaOne->votes_count = 1;
        $ideaOne->voted_by_user = 1;

        Livewire::actingAs($userA)
            ->test(IdeaIndex::class, [
                'idea' => $ideaOne,
                'voteCount' => 5,
            ])
            ->call('vote')
            ->assertSet('voteCount', 4)
            ->assertSet('hasVoted', false)
            ->assertSee('Vote');

        $this->assertDatabaseMissing('votes', [
            'user_id' => $userA->id,
            'idea_id' => $ideaOne->id
        ]);
    }
}
