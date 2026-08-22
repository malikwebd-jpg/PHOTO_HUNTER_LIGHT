<?php
// router principal

$photos = $connexion->query(
    'SELECT photos.id,
            photos.title,
            photos.cover,
            photos.resume,
            authors.firstname,
            authors.lastname
     FROM photos
     INNER JOIN authors ON authors.id = photos.author_id
     ORDER BY photos.created_at DESC
     LIMIT 3'
)->fetchAll(PDO::FETCH_ASSOC);

$authors = $connexion->query(
    'SELECT id, firstname, lastname, picture
     FROM authors
     ORDER BY created_at DESC
     LIMIT 2'
)->fetchAll(PDO::FETCH_ASSOC);

$categories = $connexion->query(
    'SELECT id, name
     FROM categories
     ORDER BY name ASC'
)->fetchAll(PDO::FETCH_ASSOC);
