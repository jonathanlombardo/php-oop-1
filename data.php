<?php

require_once(__DIR__ . "/Models/Production.php");
require_once(__DIR__ . "/Models/Genre.php");


$genre_1 = new Genre("Graphic novel", false, '
  The "Graphic Novel" film genre adapts comic books or graphic novels for the big screen, maintaining the visual aesthetic and engaging atmosphere of comics. With inventive framing and creative use of visual effects, it conveys a sense of movement akin to comic book pages. Characters are often iconic and stylized, reflecting the tone of their paper counterparts.');
$genre_2 = new Genre("Comedy", false, '
  Comedy films aim to entertain and amuse audiences through humorous situations, characters, and dialogue. They often rely on witty writing, physical comedy, and comedic timing to evoke laughter and enjoyment.');
$genre_3 = new Genre("Psychological", false, '
  Psychological films delve into the human mind, emotions, and behavior, often exploring complex themes such as identity, consciousness, and perception. They challenge viewers\' perceptions and provoke thought through psychological depth and exploration of characters\' inner workings.');
$genre_4 = new Genre("Dramedy", false, '
  A blend of drama and comedy, dramedy films offer a mix of emotional depth and humor. They explore serious or poignant themes while incorporating comedic elements to provide moments of levity. This genre often captures the complexities of human relationships and the ups and downs of life.');
$genre_5 = new Genre("Socio-political Thriller", false, '
  Socio-political thrillers engage with contemporary social or political issues, weaving them into suspenseful narratives. These films often involve conspiracy, intrigue, and moral ambiguity as characters navigate through complex ethical dilemmas and societal tensions');
$genre_6 = new Genre("Anime", false, '
  Anime refers to animated works, typically originating from Japan, characterized by colorful artwork, fantastical themes, and vibrant characters. Anime spans a wide range of genres, from action and adventure to romance and science fiction, and often appeals to diverse audiences with its imaginative storytelling and visual creativity.');


$productions = [
  new Production("V for Vendetta", "English", 9.2, $genre_1),
  new Production("Bianco rosso e verdone", "Italian", 8.5, $genre_2),
  new Production("Fight Club", "English", 9.1, $genre_3),
  new Production("intouchables", "French", 8.3, $genre_4),
  new Production("Die Welle", "German", 7.4, $genre_5),
  new Production("Death Note", "Japanese", 8.9, $genre_6),
];