SELECT film.title, film.description, film.release_year, film.rating, film.special_features,
category.name, film.rental_rate
FROM film
LEFT JOIN film_category ON film_category.category_id = film.film_id
LEFT JOIN category ON category.category_id = film_category.film_id  
WHERE film.rental_rate = 2.99 AND category.name = 'Drama'