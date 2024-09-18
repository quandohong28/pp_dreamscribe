<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'slug' => 'harry-potter-and-the-philosophers-stone',
                'description' => 'Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry\'s eleventh birthday, a great beetle-eyed giant of a',
                'published_date' => '1997-06-26',
                'number_chapter' => 17,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'slug' => 'harry-potter-and-the-chamber-of-secrets',
                'description' => 'The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he\'s packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.',
                'published_date' => '1998-07-02',
                'number_chapter' => 18,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban',
                'slug' => 'harry-potter-and-the-prisoner-of-azkaban',
                'description' => 'Harry Potter is lucky to reach the age of thirteen, since he has survived the murderous attacks of the feared Dark Wizard Voldemort three times. But his hopes for a quiet term concentrating on Quidditch are dashed when a maniacal mass',
                'published_date' => '1999-07-08',
                'number_chapter' => 22,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Goblet of Fire',
                'slug' => 'harry-potter-and-the-goblet-of-fire',
                'description' => 'Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that\'s supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn\'t happened for hundreds of years.',
                'published_date' => '2000-07-08',
                'number_chapter' => 37,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Order of the Phoenix',
                'slug' => 'harry-potter-and-the-order-of-the-phoenix',
                'description' => 'In his fifth year at Hogwart\'s, Harry faces challenges at every turn, from the dark threat of He-Who-Must-Not-Be-Named and the unreliability of the government of the magical world to the rise of Ron Weasley as the keeper of the Gryffindor Quidditch Team. Along the way he learns about the strength of his friends, the fierceness of his enemies, and the meaning of sacrifice.',
                'published_date' => '2003-06-21',
                'number_chapter' => 38,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Half-Blood Prince',
                'slug' => 'harry-potter-and-the-half-blood-prince',
                'description' => 'The war against Voldemort is not going well; even Muggle governments are noticing. Ron scans the obituary pages of the Daily Prophet, looking for familiar names. Dumbledore is absent from Hogwarts for long stretches of time, and the Order of the Phoenix has already suffered losses.',
                'published_date' => '2005-07-16',
                'number_chapter' => 30,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows',
                'slug' => 'harry-potter-and-the-deathly-hallows',
                'description' => 'Harry Potter is preparing to leave the Dursleys and Privet Drive for the last time. But the future that awaits him is full of danger, not only for him, but for anyone close to him - and Harry has already lost so much. Only by destroying Voldemort\'s remaining Horcruxes can Harry free himself and overcome the Dark Lord\'s forces of evil.',
                'published_date' => '2007-07-21',
                'number_chapter' => 37,
                'category_id' => 1,
                'author_id' => 1,
                'country_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hobbit',
                'slug' => 'the-hobbit',
                'description' => 'In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.',
                'published_date' => '1937-09-21',
                'number_chapter' => 19,
                'category_id' => 1,
                'author_id' => 2,
                'country_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Fellowship of the Ring',
                'slug' => 'the-fellowship-of-the-ring',
                'description' => 'One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them. In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others.',
                'published_date' => '1954-07-29',
                'number_chapter' => 29,
                'category_id' => 1,
                'author_id' => 2,
                'country_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Two Towers',
                'slug' => 'the-two-towers',
                'description' => 'The Fellowship was scattered. Some were bracing hopelessly for war against the ancient evil of Sauron. Some were contending with the treachery of the wizard Saruman. Only Frodo and Sam were left to take the accursed Ring of Power to be destroyed in Mordor–the dark Kingdom where Sauron was supreme.',
                'published_date' => '1954-11-11',
                'number_chapter' => 27,
                'category_id' => 1,
                'author_id' => 2,
                'country_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
