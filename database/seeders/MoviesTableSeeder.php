<?php

////////////////////////////////////////////////////////////
//                                                        //
// Seeder info written by Tatjana                         //
//  - Suited for the imdb DB by Jorge                     //
// * Run: php artisan db:seed --class="MoviesTableSeeder" //
//                                                        //
////////////////////////////////////////////////////////////

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('movies')->insert([
            'id' => 1,
            'title' => 'Justice League',
            'director' => 'Zack Snyder',
            'writer' => 'Chris Terrio',
            'description' => 'Zack Snyders definitive directors cut of Justice League. Determined to ensure Supermans ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions.',
            'year' => 2021,
            'runtime' => 04.25,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjI3NDg0ZTEtMDEwYS00YWMyLThjYjktMTNlM2NmYjc1OGRiXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UY864_.jpg',
            'featured' => 1,
            ]);

       DB::table('movies')->insert([
            'id' => 2,
            'title' => 'The Falcon and the Winter Soldier',
            'director' => 'Kari Skogland',
            'writer' => 'John Wick',
            'description' => 'Following the events of "Avengers: Endgame," Sam Wilson/Falcon (Anthony Mackie) and Bucky Barnes/Winter Soldier (Sebastian Stan) team up in a global adventure that tests their abilities -- and their patience.',
            'year' => 2020,
            'runtime' => 00.51,
            'release_date'  => '2021-02-13',
            'img' => 'https://s3-us-west-2.amazonaws.com/flx-editorial-wordpress/wp-content/uploads/2020/06/10173331/the-falcon-and-the-winter-soldier-700x380.jpg',
            'featured' => 1,
            ]);

       DB::table('movies')->insert([
            'id' => 3,
            'title' => 'Stranger Things',
            'director' => 'Matt Duffer',
            'writer' => 'Ross Duffer',
            'description' => 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.',
            'year' => 2021,
            'runtime' => 00.54,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

       DB::table('movies')->insert([
            'id' => 4,
            'title' => 'The Father (2020)',
            'director' => 'Florian Zeller',
            'writer' => 'Christopher Hampton',
            'description' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances, he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'year' => 2021,
            'runtime' => 01.00,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZGJhNWRiOWQtMjI4OS00ZjcxLTgwMTAtMzQ2ODkxY2JkOTVlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

       DB::table('movies')->insert([
            'id' => 5,
            'title' => 'Crisis',
            'director' => 'Nicholas Jarecki',
            'writer' => 'Nicholas Jarecki',
            'description' => 'Three stories about the world of opioids collide: a drug trafficker arranges a multi-cartel Fentanyl smuggling operation between Canada and the U.S., an architect recovering from an OxyContin addiction tracks down the truth behind her son"s involvement with narcotics, and a university professor battles unexpected revelations about his research employer, a drug company with deep government influence bringing a new "non-addictive" painkiller to market.',
            'year' => 2020,
            'runtime' => 01.58,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjg5MDFiOGMtNDE1OS00NjQ5LThjZGEtZjExMjAwOTZiYTQ1XkEyXkFqcGdeQXVyNzk4OTQyODU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 6,
            'title' => 'The Vigil',
            'director' => 'Keith Thomas',
            'writer' => 'Keith Thomas',
            'description' => 'A man providing overnight watch to a deceased member of his former Orthodox Jewish community finds himself opposite a malevolent entity, in writer-director Keith Thomas" electrifying feature debut.',
            'year' => 2019,
            'runtime' => 01.30,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BOGY2MDAxNTEtNjJhOC00ZjNmLWIyYzAtNzQ4OGY2MDBkYTc2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
        ]);

        DB::table('movies')->insert([
            'id' => 7,
            'title' => 'Tyger Tyger',
            'director' => 'Kerry Mondragon',
            'writer' => 'Kerry Mondragon',
            'description' => 'After robbing a pharmacy, a selfless woman and her mute friend kidnap a drug addict then hit the road to distribute the stolen "life saving" medication, but find themselves trapped in the fringe lands of a law-less and psychedelic city.',
            'year' => 2021,
            'runtime' => 01.32,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMmYwZWVkYTQtZTk2YS00Y2IzLTk2NDYtZTc2YzhiZGNkMDMzXkEyXkFqcGdeQXVyMjM2NjkyNDU@._V1_UY268_CR3,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 8,
            'title' => 'Night of the Kings',
            'director' => 'Philippe Lacôte',
            'writer' => 'Philippe Lacôte',
            'description' => 'A young man is sent to "La Maca", a prison of Ivory Coast in the middle of the forest ruled by its prisoners. With the red moon rising, he is designated by the Boss to be the new "Roman" and must tell a story to the other prisoners.',
            'year' => 2020,
            'runtime' => 01.33,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMDY2MDdlNDEtZmViZC00MzE3LTk5ZjAtOTg2OWVjODUyNWVjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 9,
            'title' => 'Run',
            'director' => 'Philippe Lacôte',
            'writer' => 'Michel Fessler',
            'description' => 'Run escapes... He just killed the Prime Minister of his country. In order to do so, he had to act as if he was a crazy man, wandering through the city. His life comes back by flashes ; his childhood with Tourou when his dream was to become a rain miracle-worker, his adventures with Gladys the eater, and his past as a young member of militia, in the heart of the politic and military conflict in Ivory Coast. All those lives, Run did not choose them. Everytime, he felt in by running from another life. That"s the reason why his names Run.',
            'year' => 2014,
            'runtime' => 01.39,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmM4MDljZmQtOTk1NC00MjhhLTliODItMjVjN2JhNDBjZWU3XkEyXkFqcGdeQXVyMzUyNTk3MDg@._V1_UY268_CR9,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 10,
            'title' => 'WandaVision',
            'director' => 'Jac Schaeffer',
            'writer' => 'Jac Schaeffer',
            'description' => 'Blends the style of classic sitcoms with the MCU in which Wanda Maximoff and Vision -two super-powered beings living their ideal suburban lives-begin to suspect that everything is not as it seems.',
            'year' => 2014,
            'runtime' => 00.47,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjJiZmE5ZDgtYWUxZi00MWI1LTg2MmEtZmUwZGE2YzRkNTE5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 11,
            'title' => 'Schitts Creek',
            'director' => 'Dan Levy',
            'writer' => 'Dan Levy',
            'description' => 'When rich video-store magnate Johnny Rose and his family suddenly find themselves broke, they are forced to leave their pampered lives to regroup in Schitts Creek.',
            'year' => 2015,
            'runtime' => 00.22,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNWQ1ZmM3MTQtNTVhZC00MWVlLWI5ZjgtYmZiYWQxZjUzZWM0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
        ]);

        DB::table('movies')->insert([
            'id' => 12,
            'title' => 'The Mandalorian',
            'director' => 'Jon Favreau',
            'writer' => 'Jon Favreau',
            'description' => 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
            'year' => 2015,
            'runtime' => 00.40,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 13,
            'title' => 'Bliss',
            'director' => 'Mike Cahill',
            'writer' => 'Mike Cahill',
            'description' => 'A mind-bending love story following Greg who, after recently being divorced and then fired, meets the mysterious Isabel, a woman living on the streets and convinced that the polluted, broken world around them is a computer simulation.',
            'year' => 2021,
            'runtime' => 01.44,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmFjNWY5NjQtMTJiNC00NjFlLWIxMGQtNzhmMmQ0MjhiZjQyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 14,
            'title' => 'Space Sweepers',
            'director' => 'Sung-hee Jo',
            'writer' => 'Sung-hee Jo',
            'description' => 'Set in the year 2092 and follows the crew of a space junk collector ship called The Victory. When they discover a humanoid robot named Dorothy that is known to be a weapon of mass destruction, they get involved in a risky business deal.',
            'year' => 2021,
            'runtime' => 02.16,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTUxN2M3ZWYtMzc1MC00NTc4LWFhZDItMzViZDg2NmFjMzBhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY268_CR4,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 15,
            'title' => 'Game of Thrones',
            'director' => 'David Benioff',
            'writer' => 'D.B. Weiss',
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'year' => 2011,
            'runtime' => 00.57,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY268_CR7,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 16,
            'title' => 'Old',
            'director' => 'M. Night Shyamalan',
            'writer' => 'Pierre-Oscar Lévy',
            'description' => 'This summer, visionary filmmaker M. Night Shyamalan unveils a chilling, mysterious new thriller about a family on a tropical holiday who discover that the secluded beach where they are relaxing for a few hours is somehow causing them to age rapidly - reducing their entire lives into a single day.',
            'year' => 2020,
            'runtime' => 02.35,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMzUzYjhkZWMtMzE1NS00YjUxLTliOTItN2FkOWUyY2U2YzhiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
        ]);

        DB::table('movies')->insert([
            'id' => 17,
            'title' => 'Malcolm & Marie',
            'director' => 'Sam Levinson',
            'writer' => 'Sam Levinson',
            'description' => 'A director and his girlfriends relationship is tested after they return home from his movies premiere and await criticss responses.',
            'year' => 2021,
            'runtime' => 02.26,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjVkMmU1NGItZjM4MC00ODM1LWEyOTEtY2Y1NTg0YjRhYjEwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);

        DB::table('movies')->insert([
            'id' => 18,
            'title' => 'Modern Family',
            'director' => 'Steven Levitan',
            'writer' => 'Christopher Lloyd',
            'description' => 'A director and his girlfriends relationship is tested after they return home from his Movies premiere and await criticss responses.',
            'year' => 2009,
            'runtime' => 00.22,
            'release_date'  => '2021-02-13',
            'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FModern-Family-White-Portrait-Poster%2Fdp%2FB004J8CDPO&psig=AOvVaw0N3DXkhsEJNH50pjojhoH-&ust=1615570893511000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOi9_NzkqO8CFQAAAAAdAAAAABAJ',
            'featured' => 1,
        ]);

        DB::table('movies')->insert([
            'id' => 19,
            'title' => 'The Sinner',
            'director' => 'Derek Simonds',
            'writer' => 'Derek Simonds',
            'description' => 'Anthology series that examines how and why ordinary people commit brutal crimes',
            'year' => 2017,
            'runtime' => 00.46,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BODIwYmE0MGQtYmNhMS00ZjM4LWJkMzAtNjg5YzI4MzZjMjg3XkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);


        DB::table('movies')->insert([
            'id' => 20,
            'title' => 'Criminal Minds',
            'director' => 'Jeff Davis',
            'writer' => 'Jeff Davis',
            'description' => 'The cases of the F.B.I. Behavioral Analysis Unit (B.A.U.), an elite group of profilers who analyze the nations most dangerous serial killers and individual heinous crimes in an effort to anticipate their next moves before they strike again.',
            'year' => 2005,
            'runtime' => 00.42,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNGE2ZmFkZTYtNjRiOS00ZjE3LThjOWMtZTViZjRmNDFjNTQwXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
        ]);
    }
}
