<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $id;
    public $title;
    public $date;
    public $vote;

    public function getStars($vote, $maxVote) {
        $intVote = (int) $vote;
        $normalizedVote = ceil($intVote/2);
        $normalizedMaxVote = $maxVote/2;

        $stars= '';

        for($i=0; $i < $normalizedMaxVote; $i++) {
            $class = ($i < $normalizedVote)
                ? 'bi-star-fill'
                : 'bi-star';

            $stars .= "<i class='text-warning bi {$class}'></i>";
        }

        return $stars;
    }
}
