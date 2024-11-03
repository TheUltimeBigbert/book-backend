<?php

// database/seeders/BooksTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel set in the Roaring Twenties that tells the story of Jay Gatsby and his unrequited love for Daisy Buchanan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A novel about the serious issues of rape and racial inequality, narrated by a young girl named Scout Finch.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel that explores the dangers of totalitarianism and extreme political ideology.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'description' => 'A romantic novel that critiques the British landed gentry at the end of the 18th century.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'description' => 'A novel about teenage angst and alienation, narrated by the iconic character Holden Caulfield.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'description' => 'The narrative of Ishmael, a sailor on the whaling ship Pequod, which is captained by the obsessive Captain Ahab.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'description' => 'A historical novel that intertwines the lives of several families during the Napoleonic Wars in Russia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Picture of Dorian Gray',
                'author' => 'Oscar Wilde',
                'description' => 'A novel about a man whose portrait ages while he remains young, exploring themes of vanity and moral duplicity.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'description' => 'A dystopian novel that presents a future society characterized by technological advancements and loss of individuality.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'description' => 'A fantasy novel that follows the journey of Bilbo Baggins, a hobbit who embarks on an adventure with a group of dwarves.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}