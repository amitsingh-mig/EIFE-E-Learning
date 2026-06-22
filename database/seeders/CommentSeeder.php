<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure at least one user
        $user = User::first();
        if (!$user) {
            $user = User::create([
                'name' => 'Amit Kumar',
                'email' => 'amit.kumar@gurunanakcollege.edu.in',
                'password' => bcrypt('password123')
            ]);
        }

        $c1 = Comment::create([
            'user_id' => $user->id,
            'lesson_string_id' => 'L1',
            'text' => 'The segment on HTTP/2 handshakes and multiplexing cleared up so many networking concepts. Highly recommended lesson!',
            'likes' => 4,
            'parent_id' => null,
            'created_at' => now()->subDays(2),
        ]);

        Comment::create([
            'user_id' => $user->id,
            'lesson_string_id' => 'L1',
            'text' => 'Agreed! Event-driven multiplexing is a key difference to understand.',
            'likes' => 0,
            'parent_id' => $c1->id,
            'created_at' => now()->subDays(1),
        ]);

        Comment::create([
            'user_id' => $user->id,
            'lesson_string_id' => 'L1',
            'text' => 'Welcome to Module 1, everyone! Please make sure to check out the PDF resources in the tab below as you watch the lessons.',
            'likes' => 12,
            'parent_id' => null,
            'created_at' => now()->subDays(3),
        ]);
    }
}
