SELECT film.title, film.description, film.release_year, film.rating, 
film.special_features, actor.actor_id
FROM film
LEFT JOIN film_actor ON film_actor.film_id
LEFT JOIN actor ON actor.actor_id = film_actor.film_id
WHERE actor.actor_id = 15 AND film.rating = 'G' AND film.special_features = 'behind the scenes'
