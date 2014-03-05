SELECT film.title, film.description, film.release_year, actor.actor_id
FROM film
LEFT JOIN film_actor ON film_actor.film_id
LEFT JOIN actor ON actor.actor_id = film_actor.film_id
WHERE actor.actor_id = 5
