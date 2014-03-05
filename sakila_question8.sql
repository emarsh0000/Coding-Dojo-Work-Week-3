SELECT film.title, film.description, film.release_year, film.rating, film.special_features,
category.name AS genre, actor.first_name, actor.last_name
FROM film
LEFT JOIN film_actor ON film_actor.film_id
LEFT JOIN actor ON actor.actor_id = film_actor.film_id
LEFT JOIN film_category ON film_category.category_id = film.film_id
LEFT JOIN category ON category.category_id = film_category.film_id  
WHERE actor.first_name = 'SANDRA' AND actor.last_name = 'KILMER'
