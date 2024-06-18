<?php
declare(strict_types = 1); 


/**
 * calculateAge
 *
 * Takes the given dateString and creates a DateTime with it. 
 * Calculate the difference between the given date and now and return
 * it in a human-readable sentence.
 * 
 * @param  string $dateString
 * @return string
 */
function calculateAge(string $dateString): string
{
    $date = new DateTime($dateString);
    $now = new DateTime('now');
    $dateInterval = $now->diff($date);

    return sprintf(
        "You are %d years, %d months and %d days old.",
        $dateInterval->y,
        $dateInterval->m,
        $dateInterval->d
    );
}
