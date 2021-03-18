<?php



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
            'title' => 'The Falcon and the Winter Soldier',
            'director' => 'Kari Skogland',
            'writer' => 'John Wick',
            'description' => 'Following the events of "Avengers: Endgame," Sam Wilson/Falcon (Anthony Mackie) and Bucky Barnes/Winter Soldier (Sebastian Stan) team up in a global adventure that tests their abilities -- and their patience.',
            'year' => 2021,
            'runtime' => 00.51,
            'release_date'  => '2021-02-13',
            'img' => 'https://media.comicbook.com/2020/12/marvel-falcon-and-the-winter-soldier-poster-2021-1248503.jpeg?auto=webp&width=800&height=1185&crop=800:1185,smart',
            'featured' => 1,
        ]);


        DB::table('movies')->insert([
            'title' => 'Stranger Things',
            'director' => 'Matt Duffer',
            'writer' => 'Ross Duffer',
            'description' => 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.',
            'year' => 2021,
            'runtime' => 00.54,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=b9EkMc79ZSU',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'The Father (2020)',
            'director' => 'Florian Zeller',
            'writer' => 'Christopher Hampton',
            'description' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances, he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'year' => 2021,
            'runtime' => 01.00,
            'release_date'  => '2021-02-13',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=4TZb7YfK-JI',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZGJhNWRiOWQtMjI4OS00ZjcxLTgwMTAtMzQ2ODkxY2JkOTVlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Crisis',
            'director' => 'Nicholas Jarecki',
            'writer' => 'Nicholas Jarecki',
            'description' => 'Three stories about the world of opioids collide: a drug trafficker arranges a multi-cartel Fentanyl smuggling operation between Canada and the U.S., an architect recovering from an OxyContin addiction tracks down the truth behind her son"s involvement with narcotics, and a university professor battles unexpected revelations about his research employer, a drug company with deep government influence bringing a new "non-addictive" painkiller to market.',
            'year' => 2020,
            'runtime' => 01.58,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjg5MDFiOGMtNDE1OS00NjQ5LThjZGEtZjExMjAwOTZiYTQ1XkEyXkFqcGdeQXVyNzk4OTQyODU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=Y0JZVfQFqos',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjg5MDFiOGMtNDE1OS00NjQ5LThjZGEtZjExMjAwOTZiYTQ1XkEyXkFqcGdeQXVyNzk4OTQyODU@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);


        DB::table('movies')->insert([
            'title' => 'The Vigil',
            'director' => 'Keith Thomas',
            'writer' => 'Keith Thomas',
            'description' => 'A man providing overnight watch to a deceased member of his former Orthodox Jewish community finds himself opposite a malevolent entity, in writer-director Keith Thomas" electrifying feature debut.',
            'year' => 2019,
            'runtime' => 01.30,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BOGY2MDAxNTEtNjJhOC00ZjNmLWIyYzAtNzQ4OGY2MDBkYTc2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=JarbtubycQg',
            'img' => 'https://m.media-amazon.com/images/M/MV5BOGY2MDAxNTEtNjJhOC00ZjNmLWIyYzAtNzQ4OGY2MDBkYTc2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Tyger Tyger',
            'director' => 'Kerry Mondragon',
            'writer' => 'Kerry Mondragon',
            'description' => 'After robbing a pharmacy, a selfless woman and her mute friend kidnap a drug addict then hit the road to distribute the stolen "life saving" medication, but find themselves trapped in the fringe lands of a law-less and psychedelic city.',
            'year' => 2021,
            'runtime' => 01.32,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMmYwZWVkYTQtZTk2YS00Y2IzLTk2NDYtZTc2YzhiZGNkMDMzXkEyXkFqcGdeQXVyMjM2NjkyNDU@._V1_UY268_CR3,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=CdYUTKDs8Y4',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMmYwZWVkYTQtZTk2YS00Y2IzLTk2NDYtZTc2YzhiZGNkMDMzXkEyXkFqcGdeQXVyMjM2NjkyNDU@._V1_UY268_CR3,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Night of the Kings',
            'director' => 'Philippe Lacôte',
            'writer' => 'Philippe Lacôte',
            'description' => 'A young man is sent to "La Maca", a prison of Ivory Coast in the middle of the forest ruled by its prisoners. With the red moon rising, he is designated by the Boss to be the new "Roman" and must tell a story to the other prisoners.',
            'year' => 2020,
            'runtime' => 01.33,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMDY2MDdlNDEtZmViZC00MzE3LTk5ZjAtOTg2OWVjODUyNWVjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=qfj2rINpoEI',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMDY2MDdlNDEtZmViZC00MzE3LTk5ZjAtOTg2OWVjODUyNWVjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);


        DB::table('movies')->insert([
            'title' => 'Run',
            'director' => 'Philippe Lacôte',
            'writer' => 'Michel Fessler',
            'description' => 'Run escapes... He just killed the Prime Minister of his country. In order to do so, he had to act as if he was a crazy man, wandering through the city. His life comes back by flashes ; his childhood with Tourou when his dream was to become a rain miracle-worker, his adventures with Gladys the eater, and his past as a young member of militia, in the heart of the politic and military conflict in Ivory Coast. All those lives, Run did not choose them. Everytime, he felt in by running from another life. That"s the reason why his names Run.',
            'year' => 2014,
            'runtime' => 01.39,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmM4MDljZmQtOTk1NC00MjhhLTliODItMjVjN2JhNDBjZWU3XkEyXkFqcGdeQXVyMzUyNTk3MDg@._V1_UY268_CR9,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=0Dhh7q9Us5c',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmM4MDljZmQtOTk1NC00MjhhLTliODItMjVjN2JhNDBjZWU3XkEyXkFqcGdeQXVyMzUyNTk3MDg@._V1_UY268_CR9,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'WandaVision',
            'director' => 'Jac Schaeffer',
            'writer' => 'Jac Schaeffer',
            'description' => 'Blends the style of classic sitcoms with the MCU in which Wanda Maximoff and Vision -two super-powered beings living their ideal suburban lives-begin to suspect that everything is not as it seems.',
            'year' => 2014,
            'runtime' => 00.47,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjJiZmE5ZDgtYWUxZi00MWI1LTg2MmEtZmUwZGE2YzRkNTE5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=sj9J2ecsSpo',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjJiZmE5ZDgtYWUxZi00MWI1LTg2MmEtZmUwZGE2YzRkNTE5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Schitts Creek',
            'director' => 'Dan Levy',
            'writer' => 'Dan Levy',
            'description' => 'When rich video-store magnate Johnny Rose and his family suddenly find themselves broke, they are forced to leave their pampered lives to regroup in Schitts Creek.',
            'year' => 2015,
            'runtime' => 00.22,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNWQ1ZmM3MTQtNTVhZC00MWVlLWI5ZjgtYmZiYWQxZjUzZWM0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=W0uWS6CnC2o',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNWQ1ZmM3MTQtNTVhZC00MWVlLWI5ZjgtYmZiYWQxZjUzZWM0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'The Mandalorian',
            'director' => 'Jon Favreau',
            'writer' => 'Jon Favreau',
            'description' => 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
            'year' => 2015,
            'runtime' => 00.40,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=aOC8E8z_ifw',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Bliss',
            'director' => 'Mike Cahill',
            'writer' => 'Mike Cahill',
            'description' => 'A mind-bending love story following Greg who, after recently being divorced and then fired, meets the mysterious Isabel, a woman living on the streets and convinced that the polluted, broken world around them is a computer simulation.',
            'year' => 2021,
            'runtime' => 01.44,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmFjNWY5NjQtMTJiNC00NjFlLWIxMGQtNzhmMmQ0MjhiZjQyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=ZHtPm8v-yNw',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYmFjNWY5NjQtMTJiNC00NjFlLWIxMGQtNzhmMmQ0MjhiZjQyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Space Sweepers',
            'director' => 'Sung-hee Jo',
            'writer' => 'Sung-hee Jo',
            'description' => 'Set in the year 2092 and follows the crew of a space junk collector ship called The Victory. When they discover a humanoid robot named Dorothy that is known to be a weapon of mass destruction, they get involved in a risky business deal.',
            'year' => 2021,
            'runtime' => 02.16,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTUxN2M3ZWYtMzc1MC00NTc4LWFhZDItMzViZDg2NmFjMzBhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY268_CR4,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=H1WYnJF1Pwo',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTUxN2M3ZWYtMzc1MC00NTc4LWFhZDItMzViZDg2NmFjMzBhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY268_CR4,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Game of Thrones',
            'director' => 'David Benioff',
            'writer' => 'D.B. Weiss',
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'year' => 2011,
            'runtime' => 00.57,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY268_CR7,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=gcTkNV5Vg1E',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY268_CR7,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Old',
            'director' => 'M. Night Shyamalan',
            'writer' => 'Pierre-Oscar Lévy',
            'description' => 'This summer, visionary filmmaker M. Night Shyamalan unveils a chilling, mysterious new thriller about a family on a tropical holiday who discover that the secluded beach where they are relaxing for a few hours is somehow causing them to age rapidly - reducing their entire lives into a single day.',
            'year' => 2020,
            'runtime' => 02.35,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMzUzYjhkZWMtMzE1NS00YjUxLTliOTItN2FkOWUyY2U2YzhiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=ZaaQoutaEj8',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMzUzYjhkZWMtMzE1NS00YjUxLTliOTItN2FkOWUyY2U2YzhiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Malcolm & Marie',
            'director' => 'Sam Levinson',
            'writer' => 'Sam Levinson',
            'description' => 'A director and his girlfriends relationship is tested after they return home from his movies premiere and await criticss responses.',
            'year' => 2021,
            'runtime' => 02.26,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjVkMmU1NGItZjM4MC00ODM1LWEyOTEtY2Y1NTg0YjRhYjEwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=CGZmwsK58M8',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjVkMmU1NGItZjM4MC00ODM1LWEyOTEtY2Y1NTg0YjRhYjEwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Modern Family',
            'director' => 'Steven Levitan',
            'writer' => 'Christopher Lloyd',
            'description' => 'A director and his girlfriends relationship is tested after they return home from his Movies premiere and await criticss responses.',
            'year' => 2009,
            'runtime' => 00.22,
            'release_date'  => '2021-02-13',
            'img' => 'https://i.pinimg.com/originals/d3/d1/4c/d3d14c8d2e51805536839dc6eab90e70.jpg',
            'featured' => 1,
            'video_url' => 'https://www.youtube.com/watch?v=X0lRjbrH-L8',
            'img' => 'Three different but related families face trials and tribulations in their own uniquely comedic ways'
        ]);

        DB::table('movies')->insert([
            'title' => 'The Sinner',
            'director' => 'Derek Simonds',
            'writer' => 'Derek Simonds',
            'description' => 'Anthology series that examines how and why ordinary people commit brutal crimes',
            'year' => 2017,
            'runtime' => 00.46,
            'release_date'  => '2021-02-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BODIwYmE0MGQtYmNhMS00ZjM4LWJkMzAtNjg5YzI4MzZjMjg3XkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'featured' => 0,
            'video_url' => 'https://www.youtube.com/watch?v=ZEfnpFuzxnE',
            'img' => 'https://m.media-amazon.com/images/M/MV5BODIwYmE0MGQtYmNhMS00ZjM4LWJkMzAtNjg5YzI4MzZjMjg3XkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]);


        DB::table('movies')->insert([
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


        DB::table('movies')->insert([
            'title' => 'Raya and the Last Dragon',
            'director' => 'Carlos López Estrada',
            'writer' => 'Don Hall',
            'description' => 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.',
            'year' => 2021,
            'runtime' => 01.47,
            'release_date'  => '2021-05-03',
            'img' => 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.WqA8~2eefa/w:600/h:857/q:75/https://bleedingcool.com/wp-content/uploads/2021/02/raya_and_the_last_dragon_ver10_xlg.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'Below Zero',
            'director' => 'Lluís Quílez',
            'writer' => 'Fernando Navarro',
            'description' => 'When a prisoner transfer van is attacked, the cop in charge must fight those inside and outside while dealing with a silent foe: the icy temperatures.',
            'year' => 2021,
            'runtime' => 01.46,
            'release_date'  => '2021-01-29',
            'img' => 'https://media2.firstshowing.net/firstshowing/img11/BelowZeroSpanishposterbigimg5991.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Breach',
            'director' => 'John Suits',
            'writer' => 'Edward Drake',
            'description' => 'When a prisoner transfer van is attacked, the cop in charge must fight those inside and outside while dealing with a silent foe: the icy temperatures.',
            'year' => 2021,
            'runtime' => 01.32,
            'release_date'  => '2020-12-18',
            'img' => 'https://m.media-amazon.com/images/M/MV5BOTk1Y2IyYzAtZGVkNC00Y2U3LWE0MWQtN2E3MTE1OTBjN2QyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Birds of Prey',
            'director' => 'Cathy Yan',
            'writer' => 'Christina Hodson',
            'description' => 'Harley Quinn joins forces with a singer, an assassin and a police detective to help a young girl who had a hit placed on her after she stole a rare diamond from a crime lord.',
            'year' => 2020,
            'runtime' => 01.49,
            'release_date'  => '2020-07-02',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/81jdGmsfsxL._AC_SL1500_.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'Tenet',
            'director' => 'Christopher Nolan',
            'writer' => 'Christopher Nolan',
            'description' => 'Harley Quinn joins forces with a singer, an assassin and a police detective to help a young girl who had a hit placed on her after she stole a rare diamond from a crime lord.',
            'year' => 2020,
            'runtime' => 02.30,
            'release_date'  => '2020-03-09',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Bloodshot',
            'director' => 'Dave Wilson',
            'writer' => 'Dave Wilson',
            'description' => 'After he and his wife are murdered, marine Ray Garrison is resurrected by a team of scientists. Enhanced with nanotechnology, he becomes a superhuman, biotech killing machine—Bloodshot. As Ray first trains with fellow super-soldiers, he cannot recall anything from his former life. But when his memories flood back and he remembers the man that killed both him and his wife, he breaks out of the facility to get revenge, only to discover that theres more to the conspiracy than he thought.',
            'year' => 2020,
            'runtime' => 02.30,
            'release_date'  => '2020-10-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjA5YjA2YjUtMGRlNi00ZTU4LThhZmMtNDc0OTg4ZWExZjI3XkEyXkFqcGdeQXVyNjUyNjI3NzU@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Death of Me',
            'director' => 'Darren Lynn Bousman',
            'writer' => 'Ari Margolis',
            'description' => 'A couple on holiday on a remote South Pacific island awaken one morning with a hang over and no recollection of what transpired. When playing back a video of the previous night, they see they participated in a local ritual that somehow ends with him murdering her.',
            'year' => 2020,
            'runtime' => 01.35,
            'release_date'  => '2020-11-29',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNWY2MDJiZjctNDgyYS00ZmZmLTk1NzctNjkwOTY2ODM1ZDYyXkEyXkFqcGdeQXVyNDczNjI2MzU@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Alone',
            'director' => 'John Hyams',
            'writer' => 'Mattias Olsson',
            'description' => 'A recently widowed traveler is kidnapped by a cold blooded killer, only to escape into the wilderness where she is forced to battle against the elements as her pursuer closes in on her.',
            'year' => 2020,
            'runtime' => 01.38,
            'release_date'  => '2020-09-10',
            'img' => 'https://www.pophorror.com/wp-content/uploads/2020/08/alonebanner.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'Extraction',
            'director' => 'Sam Hargrave',
            'writer' => 'Ande Parks',
            'description' => 'Tyler Rake, a fearless mercenary who offers his services on the black market, embarks on a dangerous mission when he is hired to rescue the kidnapped son of a Mumbai crime lord.',
            'year' => 2020,
            'runtime' => 01.56,
            'release_date'  => '2020-04-24',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMDJiNzUwYzEtNmQ2Yy00NWE4LWEwNzctM2M0MjE0OGUxZTA3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Rampage',
            'director' => 'Brad Peyton',
            'writer' => 'Carlton Cuse',
            'description' => 'Primatologist Davis Okoye shares an unshakable bond with George, the extraordinarily intelligent, silverback gorilla who has been in his care since birth. But a rogue genetic experiment gone awry mutates this gentle ape into a raging creature of enormous size. To make matters worse, it’s soon discovered there are other similarly altered animals. As these newly created alpha predators tear across North America, destroying everything in their path, Okoye teams with a discredited genetic engineer to secure an antidote, fighting his way through an ever-changing battlefield, not only to halt a global catastrophe but to save the fearsome creature that was once his friend.',
            'year' => 2018,
            'runtime' => 01.47,
            'release_date'  => '2018-04-13',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/51oDnjcYZRL._AC_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Fear of Rain',
            'director' => 'Castille Landon',
            'writer' => 'Castille Landon',
            'description' => 'A teenage girl living with schizophrenia begins to suspect her neighbor has kidnapped a child. Her parents try desperately to help her live a normal life, without exposing their own tragic secrets, and the only person who believes her is Caleb – a boy she isn’t even sure exists.',
            'year' => 2021,
            'runtime' => 01.49,
            'release_date'  => '2021-02-12',
            'img' => 'https://lh3.googleusercontent.com/proxy/ji9M-bLH-X6wsd4FfkyN_MY1diZ2TrViGeXqebxFpJp7KvaXznyHHcxRklaWdXgnb7x1WR6eifAoPR7XyjU3W5jwUXkGH6E85_JpudAtAu1-hQ',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Land',
            'director' => 'Robin Wright',
            'writer' => 'Jesse Chatham',
            'description' => 'Edee, in the aftermath of an unfathomable event, finds herself unable to stay connected to the world she once knew and in the face of that uncertainty, retreats to the magnificent, but unforgiving, wilds of the Rockies. After a local hunter brings her back from the brink of death, she must find a way to live again.',
            'year' => 2021,
            'runtime' => 01.29,
            'release_date'  => '2021-02-12',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMDk4YmZiZjYtMjgxMi00ZWU4LTk5MTQtMTBjOTZiOGUxOTM2XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Alpha Test',
            'director' => 'Aaron Mirtes',
            'writer' => 'Aaron Mirtes',
            'description' => 'A suburban family drives their new gadget, The Alpha Home Assistant, to a killing rampage after mistreating and abusing it, leading to a full A.I. uprising…',
            'year' => 2021,
            'runtime' => 01.27,
            'release_date'  => '2021-04-02',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNTM1NWNiMzUtMDdjMy00NGVmLWI2MjUtNTM0NWJjZDljZjk1XkEyXkFqcGdeQXVyNTA0MDQ3NjY@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Minari',
            'director' => 'Lee Isaac Chung',
            'writer' => 'Lee Isaac Chung',
            'description' => 'A Korean-American family moves to Arkansas in search of their own American Dream. With the arrival of their sly, foul-mouthed, but incredibly loving grandmother, the stability of their relationships is challenged even more in this new life in the rugged Ozarks, testing the undeniable resilience of family and what really makes a home.',
            'year' => 2021,
            'runtime' => 01.55,
            'release_date'  => '2021-03-03',
            'img' => 'https://img.moviepostershop.com/minari-movie-poster-2021-1000780669.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Parasite',
            'director' => 'Bong Joon-ho',
            'writer' => 'Bong Joon-ho',
            'description' => 'All unemployed, Ki-taeks family takes peculiar interest in the wealthy and glamorous Parks for their livelihood until they get entangled in an unexpected incident.',
            'year' => 2019,
            'runtime' => 02.13,
            'release_date'  => '2021-01-11',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/91sustfojBL._AC_SY879_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Hamilton',
            'director' => 'Thomas Kail',
            'writer' => 'Lin-Manuel Miranda',
            'description' => 'Presenting the tale of American founding father Alexander Hamilton, this filmed version of the original Broadway smash hit is the story of America then, told by America now.',
            'year' => 2020,
            'runtime' => 02.40,
            'release_date'  => '2020-03-07',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNjViNWRjYWEtZTI0NC00N2E3LTk0NGQtMjY4NTM3OGNkZjY0XkEyXkFqcGdeQXVyMjUxMTY3ODM@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Peninsula',
            'director' => 'Yeon Sang-ho',
            'writer' => 'Ryu Yong-jae',
            'description' => 'A soldier and his team battle hordes of post-apocalyptic zombies in the wastelands of the Korean Peninsula.',
            'year' => 2020,
            'runtime' => 01.56,
            'release_date'  => '2020-07-15',
            'img' => 'https://d13ezvd6yrslxm.cloudfront.net/wp/wp-content/images/rmjedpxk6z251.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'Jon Turteltaub',
            'director' => 'Yeon Sang-ho',
            'writer' => 'Belle Avery',
            'description' => 'A deep sea submersible pilot revisits his past fears in the Mariana Trench, and accidentally unleashes the seventy foot ancestor of the Great White Shark believed to be extinct.',
            'year' => 2018,
            'runtime' => 01.53,
            'release_date'  => '2018-10-08',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTAxMGRmODYtM2NkYS00ZGRlLWE1MWItYjI1MzIwNjQwN2RiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Avatar',
            'director' => 'James Cameron',
            'writer' => 'James Cameron',
            'description' => 'In the 22nd century, a paraplegic Marine is dispatched to the moon Pandora on a unique mission, but becomes torn between following orders and protecting an alien civilization.',
            'year' => 2009,
            'runtime' => 02.42,
            'release_date'  => '2009-12-18',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Inception',
            'director' => 'Christopher Nolan',
            'writer' => 'Christopher Nolan',
            'description' => 'Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: "inception", the implantation of another persons idea into a targets subconscious.',
            'year' => 2010,
            'runtime' => 02.28,
            'release_date'  => '2010-07-16',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'I Care a Lot',
            'director' => 'J Blakeson',
            'writer' => 'J Blakeson',
            'description' => 'A court-appointed legal guardian defrauds her older clients and traps them under her care. But her latest mark comes with some unexpected baggage.',
            'year' => 2010,
            'runtime' => 01.59,
            'release_date'  => '2021-02-19',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYWU2ZTRhNDMtMWYxMC00ZTVkLThjZmItZGY4MGU0YmZlMjJlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Wolf of Wall Street',
            'director' => 'Martin Scorsese',
            'writer' => 'Terence Winter',
            'description' => 'A New York stockbroker refuses to cooperate in a large securities fraud case involving corruption on Wall Street, corporate banking world and mob infiltration. Based on Jordan Belforts autobiography.',
            'year' => 2013,
            'runtime' => 03.00,
            'release_date'  => '2013-12-25',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'To All the Boys: Always and Forever',
            'director' => 'Michael Fimognari',
            'writer' => 'Katie Lovejoy',
            'description' => 'Senior year of high school takes center stage as Lara Jean returns from a family trip to Korea and considers her college plans — with and without Peter.',
            'year' => 2021,
            'runtime' => 01.55,
            'release_date'  => '2021-02-12',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTBkNDE1MTAtZDZjMi00ZjMzLWEwMjYtOTFlNjVmMjA1MWE0XkEyXkFqcGdeQXVyNjEwNTM2Mzc@._V1_UY1200_CR25,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'After We Collided',
            'director' => 'Roger Kumble',
            'writer' => 'Mario Celya',
            'description' => 'Tessa finds herself struggling with her complicated relationship with Hardin; she faces a dilemma that could change their lives forever.',
            'year' => 2020,
            'runtime' => 01.45,
            'release_date'  => '2020-09-02',
            'img' => 'https://m.media-amazon.com/images/M/MV5BN2UyNGM3MDUtMTIzZi00ZDdkLThlYTktYjk0ZDMzM2JiMjMyXkEyXkFqcGdeQXVyNzE0MjkxMzA@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Titanic',
            'director' => 'James Cameron',
            'writer' => 'James Cameron',
            'description' => '101-year-old Rose DeWitt Bukater tells the story of her life aboard the Titanic, 84 years later. A young Rose boards the ship with her mother and fiancé. Meanwhile, Jack Dawson and Fabrizio De Rossi win third-class tickets aboard the ship. Rose tells the whole story from Titanics departure through to its death—on its first and last voyage—on April 15, 1912.',
            'year' => 1997,
            'runtime' => 03.14,
            'release_date'  => '1997-12-19',
            'img' => 'https://cdn.shopify.com/s/files/1/1416/8662/products/titanic_1997_styleA_original_film_art_d26e81c0-1b87-4076-9da4-9fcdc0389ea5_1200x.jpg?v=1607475298',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Five Feet Apart',
            'director' => 'Justin Baldoni',
            'writer' => 'Tobias Iaconis',
            'description' => 'Seventeen-year-old Stella spends most of her time in the hospital as a cystic fibrosis patient. Her life is full of routines, boundaries and self-control — all of which get put to the test when she meets Will, an impossibly charming teen who has the same illness. Theres an instant flirtation, though restrictions dictate that they must maintain a safe distance between them. As their connection intensifies, so does the temptation to throw the rules out the window and embrace that attraction.',
            'year' => 2019,
            'runtime' => 01.56,
            'release_date'  => '2019-03-15',
            'img' => 'https://m.media-amazon.com/images/I/61ssPI1O3XL._AC_SL1481_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Mulan',
            'director' => 'Niki Caro',
            'writer' => 'Lauren Hynek',
            'description' => 'When the Emperor of China issues a decree that one man per family must serve in the Imperial Chinese Army to defend the country from Huns, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. She is spirited, determined and quick on her feet. Disguised as a man by the name of Hua Jun, she is tested every step of the way and must harness her innermost strength and embrace her true potential.',
            'year' => 2020,
            'runtime' => 01.55,
            'release_date'  => '2020-09-04',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNDliY2E1MjUtNzZkOS00MzJlLTgyOGEtZDg4MTI1NzZkMTBhXkEyXkFqcGdeQXVyNjMwMzc3MjE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Wonder Woman',
            'director' => 'Patty Jenkins',
            'writer' => 'Geoff Johns',
            'description' => 'An Amazon princess comes to the world of Man in the grips of the First World War to confront the forces of evil and bring an end to human conflict.',
            'year' => 2017,
            'runtime' => 02.21,
            'release_date'  => '2017-06-02',
            'img' => 'https://img.moviepostershop.com/wonder-woman-movie-poster-2017-1020777371.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Godfather',
            'director' => 'Francis Ford Coppola',
            'writer' => 'Mario Puzo',
            'description' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.',
            'year' => 1972,
            'runtime' => 02.55,
            'release_date'  => '1972-03-15',
            'img' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Greenland',
            'director' => 'Ric Roman Waugh',
            'writer' => 'Chris Sparling',
            'description' => 'John Garrity, his estranged wife and their young son embark on a perilous journey to find sanctuary as a planet-killing comet hurtles toward Earth. Amid terrifying accounts of cities getting levelled, the Garritys experience the best and worst in humanity. As the countdown to the global apocalypse approaches zero, their incredible trek culminates in a desperate and last-minute flight to a possible safe haven.',
            'year' => 2020,
            'runtime' => 02.00,
            'release_date'  => '2020-07-29',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMzcyMzU4MDUtM2JhOC00ZDg2LTg5MGMtZjc2OGMyMjhlMGE2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Pacific Rim',
            'director' => 'Guillermo del Toro',
            'writer' => 'Travis Beacham',
            'description' => 'A ragtag band of humans band together in the year 2025 to fight legions of monstrous creatures rising from the sea. Using massive piloted robots to combat the alien threat, earths survivors take the fight to the invading alien force lurking in the depths of the Pacific Ocean. Nearly defenseless in the face of the relentless enemy, the forces of mankind have no choice but to turn to two unlikely heroes -- a washed up former pilot and an untested trainee -- who now stand as earths final hope against the mounting apocalypse.',
            'year' => 2013,
            'runtime' => 02.11,
            'release_date'  => '2013-07-12',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTY3MTI5NjQ4Nl5BMl5BanBnXkFtZTcwOTU1OTU0OQ@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Interstellar',
            'director' => 'Christopher Nolan',
            'writer' => 'Jonathan Nolan',
            'description' => 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.',
            'year' => 2014,
            'runtime' => 02.49,
            'release_date'  => '2014-11-07',
            'img' => 'https://i.pinimg.com/originals/11/1c/5c/111c5c9ad99661af2d80e38948cf29d8.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Lion King',
            'director' => 'Jon Favreau',
            'writer' => 'Brenda Chapman',
            'description' => 'Simba idolizes his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cubs arrival. Scar, Mufasas brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simbas exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.',
            'year' => 2019,
            'runtime' => 01.58,
            'release_date'  => '2019-07-19',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/71pCGJSF0lL._AC_SY741_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Focus',
            'director' => 'John Requa',
            'writer' => 'Glenn Ficarra',
            'description' => 'Nicky, an accomplished con artist, gets romantically involved with his disciple Jess but later ends their relationship. Years later, she returns as a femme fatale to spoil his plans.',
            'year' => 2015,
            'runtime' => 01.45,
            'release_date'  => '2015-02-27',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTUwODg2OTA4OF5BMl5BanBnXkFtZTgwOTE5MTE4MzE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Baywatch',
            'director' => 'Seth Gordon',
            'writer' => 'Thomas Lennon',
            'description' => 'Devoted lifeguard Mitch Buchannon butts heads with a brash new recruit. Together, they uncover a local criminal plot that threatens the future of the Bay.',
            'year' => 2017,
            'runtime' => 01.56,
            'release_date'  => '2017-05-26',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/710-LNNxiYL._AC_SY606_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Bad Boys for Life',
            'director' => 'Bilall Fallah',
            'writer' => 'Joe Carnahan',
            'description' => 'Marcus and Mike are forced to confront new threats, career changes, and midlife crises as they join the newly created elite team AMMO of the Miami police department to take down the ruthless Armando Armas, the vicious leader of a Miami drug cartel.',
            'year' => 2020,
            'runtime' => 02.04,
            'release_date'  => '2020-01-17',
            'img' => 'https://i.pinimg.com/originals/91/a2/e2/91a2e21383bc49ee35b5004159321d78.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Death Wish',
            'director' => 'Eli Roth',
            'writer' => 'Brian Garfield',
            'description' => 'A mild-mannered father is transformed into a killing machine after his family is torn apart by a violent act.',
            'year' => 2018,
            'runtime' => 01.47,
            'release_date'  => '2018-03-02',
            'img' => 'https://www.themoviedb.org/t/p/original/5cUdQOa0MzlKRwHpBiHvetqXmFp.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Red Dot',
            'director' => 'Alain Darborg',
            'writer' => 'Per Dickson',
            'description' => 'On a hiking trip to rekindle their marriage, a couple find themselves fleeing for their lives in the unforgiving wilderness from an unknown shooter.',
            'year' => 2021,
            'runtime' => 01.25,
            'release_date'  => '2021-02-11',
            'img' => 'https://image.tmdb.org/t/p/original/xZ2KER2gOHbuHP2GJoODuXDSZCb.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Alpha',
            'director' => 'Albert Hughes',
            'writer' => 'Dan Wiedenhaupt',
            'description' => 'In the prehistoric past, Keda, a young and inexperienced hunter, struggles to return home after being separated from his tribe when bison hunting goes awry. On his way back he will find an unexpected ally.',
            'year' => 2018,
            'runtime' => 01.37,
            'release_date'  => '2018-08-17',
            'img' => 'https://i.pinimg.com/564x/85/58/91/855891387300b494c2d4d3f23e88c4c6.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Hacksaw Ridge',
            'director' => 'Mel Gibson',
            'writer' => 'Robert Schenkkan',
            'description' => 'WWII American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people and becomes the first Conscientious Objector in American history to receive the Congressional Medal of Honor.',
            'year' => 2016,
            'runtime' => 02.19,
            'release_date'  => '2019-11-04',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjQ1NjM3MTUxNV5BMl5BanBnXkFtZTgwMDc5MTY5OTE@._V1_.jpg',
            'featured' => 1,
        ]);
        DB::table('movies')->insert([
            'title' => 'How to Train Your Dragon 2',
            'director' => 'Dean DeBlois',
            'writer' => 'Cressida Cowell',
            'description' => 'The thrilling second chapter of the epic How To Train Your Dragon trilogy brings back the fantastical world of Hiccup and Toothless five years later. While Astrid, Snotlout and the rest of the gang are challenging each other to dragon races (the islands new favorite contact sport), the now inseparable pair journey through the skies, charting unmapped territories and exploring new worlds. When one of their adventures leads to the discovery of a secret ice cave that is home to hundreds of new wild dragons and the mysterious Dragon Rider, the two friends find themselves at the center of a battle to protect the peace.',
            'year' => 2014,
            'runtime' => 01.42,
            'release_date'  => '2014-06-13',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMzMwMTAwODczN15BMl5BanBnXkFtZTgwMDk2NDA4MTE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Venom',
            'director' => 'Ruben Fleischer',
            'writer' => ' Jeff Pinkner',
            'description' => 'Investigative journalist Eddie Brock attempts a comeback following a scandal, but accidentally becomes the host of Venom, a violent, super powerful alien symbiote. Soon, he must rely on his newfound powers to protect the world from a shadowy organization looking for a symbiote of their own.',
            'year' => 2018,
            'runtime' => 01.52,
            'release_date'  => '2018-10-05',
            'img' => 'https://i.pinimg.com/originals/d1/47/83/d147834c40992ebe3185ddb1227b9785.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Tentacles',
            'director' => 'Clara Aranovich',
            'writer' => 'Alexandra Pechman',
            'description' => 'A young Los Angeles couple Tara and Sam fall head over heels into a new romance, entwining their lives — until their intimacy transforms into something terrifying.',
            'year' => 2021,
            'runtime' => 01.24,
            'release_date'  => '2021-02-12',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjZiODU0ZDgtNmQ0NC00NjI1LWFjMTItYjNkNmI1YzkzYmFmXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Grand Isle',
            'director' => 'Stephen S. Campanelli',
            'writer' => 'Iver William Jallah',
            'description' => 'Walter and his neglected wife lure a young man into their Victorian home to escape a hurricane. When the man is charged with murder by Det. Jones, he must reveal the couples wicked secrets to save himself.',
            'year' => 2019,
            'runtime' => 01.37,
            'release_date'  => '2019-12-06',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNDAyN2M2OTgtMjc5Ni00MDJiLTk0OWEtMWI3MDA0NzNjZmRkXkEyXkFqcGdeQXVyNDExMzMxNjE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The World to Come',
            'director' => 'Mona Fastvold',
            'writer' => 'Jim Shepard',
            'description' => 'Two women who forge a close connection despite their isolation in the mid-19th-century American frontier.',
            'year' => 2021,
            'runtime' => 01.38,
            'release_date'  => '2021-02-12',
            'img' => 'https://pbs.twimg.com/media/Ev-Vmd5XMAsDSiS.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Kissing Booth',
            'director' => 'Vince Marcello',
            'writer' => 'Beth Reekles',
            'description' => 'When teenager Elles first kiss leads to a forbidden romance with the hottest boy in high school, she risks her relationship with her best friend.',
            'year' => 2018,
            'runtime' => 01.45,
            'release_date'  => '2018-05-18',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/814eu9I4cwL._AC_SL1500_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Wrong Turn',
            'director' => 'Mike P. Nelson',
            'writer' => 'Alan B. McElroy',
            'description' => 'Jen and a group of friends set out to hike the Appalachian Trail. Despite warnings to stick to the trail, the hikers stray off course—and cross into land inhabited by The Foundation, a hidden community of mountain dwellers who use deadly means to protect their way of life.',
            'year' => 2021,
            'runtime' => 01.50,
            'release_date'  => '2021-01-26',
            'img' => 'https://m.media-amazon.com/images/M/MV5BM2Y5ZWE2MTMtODE3ZC00NWQ4LWJkNzctNGY4Njg5NDY5MzNlXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Funeral Home',
            'director' => 'Mauro Iván Ojeda',
            'writer' => 'Mauro Iván Ojeda',
            'description' => 'Bernardo is an undertaker. He runs his mortuary business in the same house where he resides. In the front, he has his clients. And in the back, his dysfunctional family lives amongst coffins, wreaths, and the mischievous but nonviolent ghosts that visit on a daily basis. But when a malevolent entity enters the scene, it wreaks havoc on the already fractured household.',
            'year' => 2020,
            'runtime' => 01.26,
            'release_date'  => '2020-08-02',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNjc5NDMzNzEtYWU2NC00MzAwLWIxY2YtODAyOGY3YzZlODViXkEyXkFqcGdeQXVyNTE1MjQzMDE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Scientist',
            'director' => 'Derrick Granado',
            'writer' => 'Derrick Granado',
            'description' => 'An unconventional scientist, struggling to care for his terminally-ill wife, embarks on a journey to develop a cure for her. However, his methods of treatment and tampering with human DNA, could lead to the extinction of humanity.',
            'year' => 2020,
            'runtime' => 01.33,
            'release_date'  => '2020-09-21',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjU2NDA5ZDktNGJhNi00YzMyLWJkZGUtMWU4NGYwZjYyNmZhXkEyXkFqcGdeQXVyMzMwNDc0OTg@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Aquaman',
            'director' => 'James Wan',
            'writer' => 'Geoff Johns',
            'description' => 'Once home to the most advanced civilization on Earth, Atlantis is now an underwater kingdom ruled by the power-hungry King Orm. With a vast army at his disposal, Orm plans to conquer the remaining oceanic people and then the surface world. Standing in his way is Arthur Curry, Orms half-human, half-Atlantean brother and true heir to the throne.',
            'year' => 2018,
            'runtime' => 02.23,
            'release_date'  => '2018-12-21',
            'img' => 'https://i.pinimg.com/originals/e1/5a/bb/e15abb6c10bafb709b812b09b77d5533.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Bumblebee',
            'director' => 'Travis Knight',
            'writer' => 'Christina Hodson',
            'description' => 'On the run in the year 1987, Bumblebee finds refuge in a junkyard in a small Californian beach town. Charlie, on the cusp of turning 18 and trying to find her place in the world, discovers Bumblebee, battle-scarred and broken. When Charlie revives him, she quickly learns this is no ordinary yellow VW bug.',
            'year' => 2018,
            'runtime' => 01.54,
            'release_date'  => '2018-12-21',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjUwNjU5NDMyNF5BMl5BanBnXkFtZTgwNzgxNjM2NzM@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Haunting of the Mary Celeste',
            'director' => 'Shana Betz',
            'writer' => 'David Ross',
            'description' => 'Rachel, a concerned researcher, and her team have set out to sea to prove that the disappearance of a family and crew from a merchant ship was for reasons having to do with the supernatural. Her theory that those on the Mary Celeste vanished into a "rift" between dimensions proves true as the boat breaks down and her crew begins to vanish one by one.',
            'year' => 2020,
            'runtime' => 01.14,
            'release_date'  => '2020-10-23',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNDBmZGQ1ODAtODNhMC00ZjRkLTllMDAtOWQ4NTJjNmI5ZmRkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Aladdin',
            'director' => 'Guy Ritchie',
            'writer' => 'John August',
            'description' => 'A kindhearted street urchin named Aladdin embarks on a magical adventure after finding a lamp that releases a wisecracking genie while a power-hungry Grand Vizier vies for the same lamp that has the power to make their deepest wishes come true.',
            'year' => 2019,
            'runtime' => 02.08,
            'release_date'  => '2019-05-24',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjQ2ODIyMjY4MF5BMl5BanBnXkFtZTgwNzY4ODI2NzM@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Shape of Water',
            'director' => 'Guillermo del Toro',
            'writer' => 'Vanessa Taylor',
            'description' => 'An other-worldly story, set against the backdrop of Cold War era America circa 1962, where a mute janitor working at a lab falls in love with an amphibious man being held captive there and devises a plan to help him escape.',
            'year' => 2017,
            'runtime' => 02.03,
            'release_date'  => '2017-12-22',
            'img' => 'https://m.media-amazon.com/images/M/MV5BNGNiNWQ5M2MtNGI0OC00MDA2LWI5NzEtMmZiYjVjMDEyOWYzXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Me Before You',
            'director' => 'Thea Sharrock',
            'writer' => 'Jojo Moyes',
            'description' => 'A small town girl is caught between dead-end jobs. A high-profile, successful man becomes wheelchair bound following an accident. The man decides his life is not worth living until the girl is hired for six months to be his new caretaker. Worlds apart and trapped together by circumstance, the two get off to a rocky start. But the girl becomes determined to prove to the man that life is worth living and as they embark on a series of adventures together, each finds their world changing in ways neither of them could begin to imagine.',
            'year' => 2016,
            'runtime' => 01.50,
            'release_date'  => '2016-06-03',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTQ2NjE4NDE2NV5BMl5BanBnXkFtZTgwOTcwNDE5NzE@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Scooby-Doo',
            'director' => 'Raja Gosnell',
            'writer' => 'Craig Titley',
            'description' => 'The Mystery Inc. gang have gone their separate ways and have been apart for two years, until they each receive an invitation to Spooky Island. Not knowing that the others have also been invited, they show up and discover an amusement park that affects young visitors in very strange ways.',
            'year' => 2002,
            'runtime' => 01.28,
            'release_date'  => '2020-06-14',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTg4MzMzMTY0OF5BMl5BanBnXkFtZTYwNzM3MTg2._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Geostorm',
            'director' => 'Dean Devlin',
            'writer' => 'Paul Guyot',
            'description' => 'After an unprecedented series of natural disasters threatened the planet, the worlds leaders came together to create an intricate network of satellites to control the global climate and keep everyone safe. But now, something has gone wrong: the system built to protect Earth is attacking it, and it becomes a race against the clock to uncover the real threat before a worldwide geostorm wipes out everything and everyone along with it.',
            'year' => 2017,
            'runtime' => 01.49,
            'release_date'  => '2017-10-20',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/A1rNhpGyASL._AC_SL1500_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Ted',
            'director' => 'Seth MacFarlane,',
            'writer' => 'Seth MacFarlane',
            'description' => 'John Bennett, a man whose childhood wish of bringing his teddy bear to life came true, now must decide between keeping the relationship with the bear or his girlfriend, Lori.',
            'year' => 2012,
            'runtime' => 01.47,
            'release_date'  => '2012-06-29',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTQ1OTU0ODcxMV5BMl5BanBnXkFtZTcwOTMxNTUwOA@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Ted 2',
            'director' => 'Seth MacFarlane',
            'writer' => 'Seth MacFarlane',
            'description' => 'Newlywed couple Ted and Tami-Lynn want to have a baby, but in order to qualify to be a parent, Ted will have to prove hes a person in a court of law.',
            'year' => 2015,
            'runtime' => 01.55,
            'release_date'  => '2015-06-26',
            'img' => 'https://lh3.googleusercontent.com/proxy/pR-uKfk6SyC4wLUxf3MnJQaD6aPteS7UJAg7P1lRTMRxreJWDcjqmye5uql83OEn7SZeswyG6lSFJEM_-7h6geSnPv1Exuy2O4yHnuIs',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Long Weekend',
            'director' => 'Stephen Basilone',
            'writer' => 'Stephen Basilone',
            'description' => 'arts chance encounter with the enigmatic Vienna leads to a whirlwind weekend together. The two fall fast and hard, but both carry secrets that could be their undoing or the chance for a fresh start.',
            'year' => 2021,
            'runtime' => 01.31,
            'release_date'  => '2021-03-12',
            'img' => 'https://resizing.flixster.com/WHr-IbieqLE5LVgd9TwvJJk7Vfg=/ems.ZW1zLXByZC1hc3NldHMvbW92aWVzLzQ5ZjY3YmRiLTQ5MWUtNDIzMS04MDcxLWYxZTk0MjU5YzRiMS5qcGc=',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Creed II',
            'director' => 'Steven Caple Jr.',
            'writer' => 'Sascha Penn',
            'description' => 'Between personal obligations and training for his next big fight against an opponent with ties to his familys past, Adonis Creed is up against the challenge of his life.',
            'year' => 2018,
            'runtime' => 02.10,
            'release_date'  => '2018-11-21',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/81Zpj5CQlfL._AC_SL1500_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Creed',
            'director' => 'Ryan Coogler',
            'writer' => 'Ryan Coogler',
            'description' => 'The former World Heavyweight Champion Rocky Balboa serves as a trainer and mentor to Adonis Johnson, the son of his late friend and former rival Apollo Creed.',
            'year' => 2015,
            'runtime' => 02.13,
            'release_date'  => '2015-11-25',
            'img' => 'https://cdn.shopify.com/s/files/1/1416/8662/products/creed_2015_advance_original_film_art_b147855a-61dd-49c3-a519-fcddc59fb2ff_5000x.jpg?v=1613590673',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Deadpool',
            'director' => 'Tim Miller',
            'writer' => 'Rhett Reese',
            'description' => 'Deadpool tells the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.',
            'year' => 2016,
            'runtime' => 01.48,
            'release_date'  => '2016-02-12',
            'img' => 'https://i.pinimg.com/originals/1a/70/6e/1a706e0021180f77cf766c219319045f.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Deadpool 2',
            'director' => 'David Leitch',
            'writer' => 'Rhett Reese',
            'description' => 'Wisecracking mercenary Deadpool battles the evil and powerful Cable and other bad guys to save a boys life.',
            'year' => 2018,
            'runtime' => 01.59,
            'release_date'  => '2018-05-18',
            'img' => 'https://i.pinimg.com/originals/ee/34/d6/ee34d6c9fa3db1be668681a958145da4.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Terminator: Dark Fate',
            'director' => 'Tim Miller',
            'writer' => 'John Friedmann',
            'description' => 'Decades after Sarah Connor prevented Judgment Day, a lethal new Terminator is sent to eliminate the future leader of the resistance. In a fight to save mankind, battle-hardened Sarah Connor teams up with an unexpected ally and an enhanced super soldier to stop the deadliest Terminator yet.',
            'year' => 2019,
            'runtime' => 02.08,
            'release_date'  => '2019-11-01',
            'img' => 'https://m.media-amazon.com/images/M/MV5BOWExYzVlZDgtY2E1ZS00NTFjLWFmZWItZjI2NWY5ZWJiNTE4XkEyXkFqcGdeQXVyMTA3MTA4Mzgw._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Exam',
            'director' => 'Stuart Hazeldine',
            'writer' => 'Stuart Hazeldine',
            'description' => 'The final candidates for a highly desirable corporate job are locked together in an exam room and given a test so simple and confusing that tension begins to unravel.',
            'year' => 2009,
            'runtime' => 01.41,
            'release_date'  => '2009-06-19',
            'img' => 'https://i.pinimg.com/originals/e6/76/5a/e6765a1c7df7d345189bc56daef03eb4.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Ellipse',
            'director' => 'Joe Bland',
            'writer' => 'Grant Martin',
            'description' => 'A man and his dog are stranded on a volatile, oval-shaped planet and are forced to adapt and escape before time destroys them both.',
            'year' => 2019,
            'runtime' => 01.16,
            'release_date'  => '2019-12-12',
            'img' => 'https://www.themoviedb.org/t/p/w500/4I0CQfnMy6sRR7QhgqsXR16TmIs.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Godmothered',
            'director' => 'Sharon Maguire',
            'writer' => 'Kari Granlund',
            'description' => 'A young and unskilled fairy godmother that ventures out on her own to prove her worth by tracking down a young girl whose request for help was ignored. What she discovers is that the girl has now become a grown woman in need of something very different than a "prince charming."',
            'year' => 2020,
            'runtime' => 01.53,
            'release_date'  => '2020-12-04',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTdkYjM0ZTQtNTc5NS00YzcxLWI0OTMtNTVjNmRlMGE3MmUzXkEyXkFqcGdeQXVyNjMwMzc3MjE@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Just Go with It',
            'director' => 'Dennis Dugan',
            'writer' => 'Allan Loeb',
            'description' => 'A plastic surgeon, romancing a much younger schoolteacher, enlists his loyal assistant to pretend to be his soon to be ex-wife, in order to cover up a careless lie. When more lies backfire, the assistants kids become involved, and everyone heads off for a weekend in Hawaii that will change all their lives.',
            'year' => 2011,
            'runtime' => 01.57,
            'release_date'  => '2011-02-11',
            'img' => 'https://i1.wp.com/nekorandom.com/wp-content/uploads/2020/05/just-go-with-it-movie-poster-adam-sandler.jpg?resize=750%2C1126&ssl=1',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Split',
            'director' => 'M. Night Shyamalan',
            'writer' => 'M. Night Shyamalan',
            'description' => 'Though Kevin has evidenced 23 personalities to his trusted psychiatrist, Dr. Fletcher, there remains one still submerged who is set to materialize and dominate all the others. Compelled to abduct three teenage girls led by the willful, observant Casey, Kevin reaches a war for survival among all of those contained within him — as well as everyone around him — as the walls between his compartments shatter apart.',
            'year' => 2017,
            'runtime' => 01.57,
            'release_date'  => '2017-01-20',
            'img' => 'https://m.media-amazon.com/images/M/MV5BZTJiNGM2NjItNDRiYy00ZjY0LTgwNTItZDBmZGRlODQ4YThkL2ltYWdlXkEyXkFqcGdeQXVyMjY5ODI4NDk@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Primal',
            'director' => 'Nick Powell',
            'writer' => 'Richard Leder',
            'description' => 'A big-game hunter for zoos who has booked passage on a Greek shipping freighter with a fresh haul of exotic and deadly animals from the Amazon, including a rare white Jaguar - along with a political assassin being extradited to the U.S in secret. Two days into the journey, the assassin escapes and releases the captive animals, throwing the ship into chaos.',
            'year' => 2019,
            'runtime' => 01.37,
            'release_date'  => '2019-12-27',
            'img' => 'https://lh3.googleusercontent.com/proxy/XNgRlYEUQ74OaNfVQplwHcdATt4jQ0pfnmVNYG5ysRJB2FGDZjttM9pIBLibeAGTsJCHoRkPNRHYzWZyRON4x6u353r67k34cau495XrQOT3',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Supernova',
            'director' => 'Harry Macqueen',
            'writer' => 'Harry Macqueen',
            'description' => 'Sam and Tusker, partners of 20 years, are traveling across England in their old RV visiting friends, family and places from their past. Since Tusker was diagnosed with early-onset dementia two years ago, their time together is the most important thing they have. As the trip progresses, however, their ideas for the future clash, secrets come out, and their love for each other is tested as never before. Ultimately, they must confront the question of what it means to love one another in the face of Tusker’s illness.',
            'year' => 2021,
            'runtime' => 01.33,
            'release_date'  => '2021-03-11',
            'img' => 'https://static.metacritic.com/images/products/movies/2/a287fc2a1f95b6ed605943851b745055.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Line of Duty',
            'director' => 'Steven C. Miller',
            'writer' => 'Jeremy Drysdale',
            'description' => 'Frank Penny is a disgraced cop looking for a shot at redemption. When the police chiefs 11-year-old daughter is abducted, Frank goes rogue to try and save her. But to find the girl, Frank will need the help of Ava Brooks, whose live-streaming news channel is broadcasting Franks every move.',
            'year' => 2019,
            'runtime' => 01.38,
            'release_date'  => '2019-12-25',
            'img' => 'https://www.sidewalkfest.com/wp-content/uploads/2019/11/Line-Of-Duty.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Lying and Stealing',
            'director' => 'Matt Aselton',
            'writer' => 'Adam Nagata',
            'description' => 'Hoping to leave his criminal lifestyle behind him, a successful art thief teams up with a sexy con woman to pull off the ultimate heist and set himself free.',
            'year' => 2019,
            'runtime' => 01.40,
            'release_date'  => '2019-07-18',
            'img' => 'https://www.cinemaclock.com/images/posters/1000x1500/6/lying-and-stealing-2019-poster.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Avengers: Endgame',
            'director' => 'Anthony Russo',
            'writer' => 'Stephen McFeely',
            'description' => 'After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos actions and restore order to the universe once and for all, no matter what consequences may be in store.',
            'year' => 2019,
            'runtime' => 03.01,
            'release_date'  => '2019-04-26',
            'img' => 'https://movieposterfactory.com/wp-content/uploads/2019/11/2019_SH_avengers_endgame_000_DS3_resultat-600x888.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Fate of the Furious',
            'director' => 'F. Gary Gray',
            'writer' => 'Chris Morgan',
            'description' => 'When a mysterious woman seduces Dom into the world of crime and a betrayal of those closest to him, the crew face trials that will test them as never before.',
            'year' => 2017,
            'runtime' => 02.16,
            'release_date'  => '2017-04-14',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMjMxODI2NDM5Nl5BMl5BanBnXkFtZTgwNjgzOTk1MTI@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Fast & Furious',
            'director' => 'Justin Lin',
            'writer' => 'Chris Morgan',
            'description' => 'When a crime brings them back to L.A., fugitive ex-con Dom Toretto reignites his feud with agent Brian OConner. But as they are forced to confront a shared enemy, Dom and Brian must give in to an uncertain new trust if they hope to outmaneuver him. And the two men will find the best way to get revenge: push the limits of whats possible behind the wheel.',
            'year' => 2009,
            'runtime' => 01.47,
            'release_date'  => '2009-04-03',
            'img' => 'https://image.tmdb.org/t/p/original//AmY8rE2HzWzZs5S81CygXXYDjki.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Fast Five',
            'director' => 'Justin Lin',
            'writer' => 'Chris Morgan',
            'description' => 'Former cop Brian OConner partners with ex-con Dom Toretto on the opposite side of the law. Since Brian and Mia Toretto broke Dom out of custody, theyve blown across many borders to elude authorities. Now backed into a corner in Rio de Janeiro, they must pull one last job in order to gain their freedom.',
            'year' => 2011,
            'runtime' => 02.10,
            'release_date'  => '2011-04-28',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMTUxNTk5MTE0OF5BMl5BanBnXkFtZTcwMjA2NzY3NA@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'I Feel Pretty',
            'director' => 'Marc Silverstein',
            'writer' => 'Abby Kohn',
            'description' => 'A head injury causes a woman to develop an extraordinary amount of confidence and believe shes drop dead gorgeous.',
            'year' => 2018,
            'runtime' => 01.51,
            'release_date'  => '2018-04-20',
            'img' => 'https://m.media-amazon.com/images/M/MV5BMGI3ZDRjZTQtMTMyYy00NGI4LWI2MjktNzMyMjg0NjQ2NTY0XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'The Wedding Unplanner',
            'director' => 'Dani de la Orden',
            'writer' => 'Olatz Arroyo',
            'description' => 'Marina is a woman in her thirties who works organizing weddings. Not because she is an inveterate romantic just because, as she says, "when people are in love, they dont care about money. Unlike her customers, she enjoys a life without ties or commitments, until the moment when she falls in love with Carlos. The problem is not only he is about to get married, but also his fiancee is Marinas childhood friend and they have hired her as their Wedding Planner.',
            'year' => 2020,
            'runtime' => 01.50,
            'release_date'  => '2020-02-14',
            'img' => 'https://m.media-amazon.com/images/M/MV5BYjAxY2MzYmEtZjljYS00ZDFlLTk4NDUtNmE5MzBhOWM3ZmE0XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY1200_CR107,0,630,1200_AL_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'It',
            'director' => 'Andy Muschietti',
            'writer' => 'Stephen King',
            'description' => 'In a small town in Maine, seven children known as The Losers Club come face to face with life problems, bullies and a monster that takes the shape of a clown called Pennywise.',
            'year' => 2017,
            'runtime' => 02.15,
            'release_date'  => '2017-09-08',
            'img' => 'https://m.media-amazon.com/images/I/61bMkkwpduL._AC_SL1024_.jpg',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'It Chapter Two',
            'director' => 'Andy Muschietti',
            'writer' => 'Stephen King',
            'description' => '27 years after overcoming the malevolent supernatural entity Pennywise, the former members of the Losers Club, who have grown up and moved away from Derry, are brought back together by a devastating phone call.',
            'year' => 2019,
            'runtime' => 02.49,
            'release_date'  => '2019-09-06',
            'img' => 'https://lh3.googleusercontent.com/proxy/D3VhP4uDaC57AWOgDKVHaFiQ_xMQQ5prthtET8Plp2TtgmfyxAj340HsFjkWTC3Ef1SImCJtJ78L98rYFYCnorTcCUeOZW78oCNe6k07fIcrYkSQPvOztjzv',
            'featured' => 0,
        ]);
        DB::table('movies')->insert([
            'title' => 'Little Women',
            'director' => 'Greta Gerwig',
            'writer' => 'Louisa May Alcott',
            'description' => 'Four sisters come of age in America in the aftermath of the Civil War.',
            'year' => 2019,
            'runtime' => 02.15,
            'release_date'  => '2019-12-25',
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/91MCxPWGWqL._AC_SL1500_.jpg',
            'featured' => 0,
        ]);
    }
}
