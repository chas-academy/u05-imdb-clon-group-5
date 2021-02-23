<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Movie::create(array(
            'id' => 1,
           'title' => 'Boss Level',
           'rating' => rand(1,5),
           'director' => 'Joe Carnahan',
           'writer' => 'Chris Borey',
           'genre' => 'Action',
           'description' => 'Stuck in a time loop, doomed to repeat the same day over and over again while being hunted by dozens of deadly assassins, a man struggles to find a way out of his strange predicament.',
           'img-url' => 'https://m.media-amazon.com/images/M/MV5BNTVkODdiMjAtNmQ5Yy00OThhLTg4MDItYTZlYTFmN2E0M2M1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
       ));

       Movie::create(array(
            'id' => 2,
            'title' => 'The Falcon and the Winter Soldier',
            'rating' => rand(1,5),
            'director' => 'Kari Skogland',
            'writer' => 'John Wick',
            'genre' => 'Action', //adventure, Drama
            'description' => 'Following the events of "Avengers: Endgame," Sam Wilson/Falcon (Anthony Mackie) and Bucky Barnes/Winter Soldier (Sebastian Stan) team up in a global adventure that tests their abilities -- and their patience.',
            'img-url' => 'https://s3-us-west-2.amazonaws.com/flx-editorial-wordpress/wp-content/uploads/2020/06/10173331/the-falcon-and-the-winter-soldier-700x380.jpg',
        ));

        Movie::create(array(
            'id' => 3,
            'title' => 'Stranger Things',
            'rating' => rand(1,5),
            'director' => 'Matt Duffer',
            'writer' => 'Ross Duffer',
            'genre' => 'Horror', //fantasy, Drama
            'description' => 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 4,
            'title' => 'The Father (2020)',
            'rating' => rand(1,5),
            'director' => 'Florian Zeller',
            'writer' => 'Christopher Hampton',
            'genre' => 'Drama', 
            'description' => 'A man refuses all assistance from his daughter as he ages. As he tries to make sense of his changing circumstances, he begins to doubt his loved ones, his own mind and even the fabric of his reality.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BZGJhNWRiOWQtMjI4OS00ZjcxLTgwMTAtMzQ2ODkxY2JkOTVlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 5,
            'title' => 'Crisis (2021)',
            'rating' => rand(1,5),
            'director' => 'Nicholas Jarecki',
            'writer' => 'Nicholas Jarecki',
            'genre' => 'Triller', 
            'description' => 'Three stories about the world of opioids collide: a drug trafficker arranges a multi-cartel Fentanyl smuggling operation between Canada and the U.S., an architect recovering from an OxyContin addiction tracks down the truth behind her son"s involvement with narcotics, and a university professor battles unexpected revelations about his research employer, a drug company with deep government influence bringing a new "non-addictive" painkiller to market.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BMjg5MDFiOGMtNDE1OS00NjQ5LThjZGEtZjExMjAwOTZiYTQ1XkEyXkFqcGdeQXVyNzk4OTQyODU@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 6,
            'title' => 'The Vigil (2019)',
            'rating' => rand(1,5),
            'director' => 'Keith Thomas',
            'writer' => 'Keith Thomas',
            'genre' => 'Horror', //Mystery, Thriller
            'description' => 'A man providing overnight watch to a deceased member of his former Orthodox Jewish community finds himself opposite a malevolent entity, in writer-director Keith Thomas" electrifying feature debut.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BOGY2MDAxNTEtNjJhOC00ZjNmLWIyYzAtNzQ4OGY2MDBkYTc2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 7,
            'title' => 'Tyger Tyger (2021)',
            'rating' => rand(1,5),
            'director' => 'Kerry Mondragon',
            'writer' => 'Kerry Mondragon',
            'genre' => 'Fantasy', //Thriller
            'description' => 'After robbing a pharmacy, a selfless woman and her mute friend kidnap a drug addict then hit the road to distribute the stolen "life saving" medication, but find themselves trapped in the fringe lands of a law-less and psychedelic city.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BMmYwZWVkYTQtZTk2YS00Y2IzLTk2NDYtZTc2YzhiZGNkMDMzXkEyXkFqcGdeQXVyMjM2NjkyNDU@._V1_UY268_CR3,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 8,
            'title' => 'Night of the Kings (2020)',
            'rating' => rand(1,5),
            'director' => 'Philippe Lacôte',
            'writer' => 'Philippe Lacôte',
            'genre' => 'Fantasy', //Drama
            'description' => 'A young man is sent to "La Maca", a prison of Ivory Coast in the middle of the forest ruled by its prisoners. With the red moon rising, he is designated by the Boss to be the new "Roman" and must tell a story to the other prisoners.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BMDY2MDdlNDEtZmViZC00MzE3LTk5ZjAtOTg2OWVjODUyNWVjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 9,
            'title' => 'Run (2014)',
            'rating' => rand(1,5),
            'director' => 'Philippe Lacôte',
            'writer' => 'Michel Fessler',
            'genre' => 'Drama', 
            'description' => 'Run escapes... He just killed the Prime Minister of his country. In order to do so, he had to act as if he was a crazy man, wandering through the city. His life comes back by flashes ; his childhood with Tourou when his dream was to become a rain miracle-worker, his adventures with Gladys the eater, and his past as a young member of militia, in the heart of the politic and military conflict in Ivory Coast. All those lives, Run did not choose them. Everytime, he felt in by running from another life. That"s the reason why his names Run.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BYmM4MDljZmQtOTk1NC00MjhhLTliODItMjVjN2JhNDBjZWU3XkEyXkFqcGdeQXVyMzUyNTk3MDg@._V1_UY268_CR9,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 10,
            'title' => 'WandaVision (2021)',
            'rating' => rand(1,5),
            'director' => 'Jac Schaeffer',
            'writer' => 'Jac Schaeffer',
            'genre' => 'Comedy', //Action, Drama
            'description' => 'Blends the style of classic sitcoms with the MCU in which Wanda Maximoff and Vision -two super-powered beings living their ideal suburban lives-begin to suspect that everything is not as it seems.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BYjJiZmE5ZDgtYWUxZi00MWI1LTg2MmEtZmUwZGE2YzRkNTE5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 11,
            'title' => 'Schitts Creek',
            'rating' => rand(1,5),
            'director' => 'Dan Levy',
            'writer' => 'Eugene Levy',
            'genre' => 'Comedy', 
            'description' => 'When rich video-store magnate Johnny Rose and his family suddenly find themselves broke, they are forced to leave their pampered lives to regroup in Schitts Creek.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BNWQ1ZmM3MTQtNTVhZC00MWVlLWI5ZjgtYmZiYWQxZjUzZWM0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 12,
            'title' => 'The Mandalorian',
            'rating' => rand(1,5),
            'director' => 'Jon Favreau',
            'writer' => 'Jon Favreau',
            'genre' => 'Sci-fi', //Action, Adventure
            'description' => 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 13,
            'title' => 'Bliss (2021)',
            'rating' => rand(1,5),
            'director' => 'Mike Cahill',
            'writer' => 'Mike Cahill',
            'genre' => 'Sci-fi', //Drama, Romance
            'description' => 'A mind-bending love story following Greg who, after recently being divorced and then fired, meets the mysterious Isabel, a woman living on the streets and convinced that the polluted, broken world around them is a computer simulation.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BYmFjNWY5NjQtMTJiNC00NjFlLWIxMGQtNzhmMmQ0MjhiZjQyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 14,
            'title' => 'Space Sweepers (2021)',
            'rating' => rand(1,5),
            'director' => 'Sung-hee Jo',
            'writer' => 'Sung-hee Jo',
            'genre' => 'Adventure', //Drama, Action
            'description' => 'Set in the year 2092 and follows the crew of a space junk collector ship called The Victory. When they discover a humanoid robot named Dorothy that is known to be a weapon of mass destruction, they get involved in a risky business deal.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BZTUxN2M3ZWYtMzc1MC00NTc4LWFhZDItMzViZDg2NmFjMzBhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY268_CR4,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 15,
            'title' => 'Game of Thrones (2011–2019)',
            'rating' => rand(1,5),
            'director' => 'David Benioff',
            'writer' => 'D.B. Weiss',
            'genre' => 'Adventure', //Drama, Action
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY268_CR7,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 16,
            'title' => 'Old (2021)',
            'rating' => rand(1,5),
            'director' => 'M. Night Shyamalan',
            'writer' => 'Pierre-Oscar Lévy',
            'genre' => 'Thriller', //Drama, Action
            'description' => 'This summer, visionary filmmaker M. Night Shyamalan unveils a chilling, mysterious new thriller about a family on a tropical holiday who discover that the secluded beach where they are relaxing for a few hours is somehow causing them to age rapidly - reducing their entire lives into a single day.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BMzUzYjhkZWMtMzE1NS00YjUxLTliOTItN2FkOWUyY2U2YzhiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 17,
            'title' => 'Malcolm & Marie (2021)',
            'rating' => rand(1,5),
            'director' => 'Sam Levinson',
            'writer' => 'Sam Levinson',
            'genre' => 'Romance', //Drama
            'description' => 'A director and his girlfriends relationship is tested after they return home from his movie premiere and await criticss responses.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BYjVkMmU1NGItZjM4MC00ODM1LWEyOTEtY2Y1NTg0YjRhYjEwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 18,
            'title' => 'Modern Family',
            'rating' => rand(1,5),
            'director' => 'Steven Levitan',
            'writer' => 'Christopher Lloyd',
            'genre' => 'Thriller', //Drama, Comedy
            'description' => 'Three different but related families face trials and tribulations in their own uniquely comedic ways',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BNzRhNWIxYTEtYjc2NS00YWFlLWFhOGEtMDZiMWM1M2RkNDkyXkEyXkFqcGdeQXVyNjc0MjkzNjc@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 19,
            'title' => 'The Sinner',
            'rating' => rand(1,5),
            'director' => 'Derek Simonds',
            'writer' => 'Derek Simonds',
            'genre' => 'Thriller', //Drama, Crime
            'description' => 'Anthology series that examines how and why ordinary people commit brutal crimes',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BODIwYmE0MGQtYmNhMS00ZjM4LWJkMzAtNjg5YzI4MzZjMjg3XkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));

        Movie::create(array(
            'id' => 20,
            'title' => 'Modern Family',
            'rating' => rand(1,5),
            'director' => 'Jeff Davis',
            'writer' => 'Jeff Davis',
            'genre' => 'Mystery', //Drama, Crime
            'description' => 'The cases of the F.B.I. Behavioral Analysis Unit (B.A.U.), an elite group of profilers who analyze the nations most dangerous serial killers and individual heinous crimes in an effort to anticipate their next moves before they strike again.',
            'img-url' => 'https://m.media-amazon.com/images/M/MV5BNGE2ZmFkZTYtNjRiOS00ZjE3LThjOWMtZTViZjRmNDFjNTQwXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_UX182_CR0,0,182,268_AL_.jpg',
        ));




       //Movie::factory()->count(10)->create();
    }
}
