SELECT film.film_id, actor.first_name, actor.last_name, actor.last_update
FROM film
LEFT JOIN film_actor ON film_actor.film_id
LEFT JOIN actor ON actor.actor_id = film_actor.film_id
WHERE film.film_id = 369