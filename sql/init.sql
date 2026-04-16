DROP DATABASE IF EXISTS ecommerce_pokemon;
CREATE DATABASE ecommerce_pokemon;
USE ecommerce_pokemon;

CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usr_nome VARCHAR(50) NOT NULL,
    usr_email VARCHAR(100) UNIQUE,
    usr_password VARCHAR(100)
  
);
CREATE TABLE amdins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    adm_nome VARCHAR(50) NOT NULL,
    adm_email VARCHAR(100) UNIQUE,
    adm_password VARCHAR(100)
  
);

CREATE TABLE cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_nome VARCHAR(50) NOT NULL,
    card_image VARCHAR(200) ,
    price INT,
    descrizione VARCHAR(200)
  
);


CREATE TABLE carrello (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_cards INT
);

USE ecommerce_pokemon;

INSERT INTO cards (card_nome, card_image, price, descrizione) VALUES
('Machamp Base Set', 'https://images.pokemontcg.io/base1/8.png', 95.00, 'Pokémon lotta molto potente.'),
('Magneton Base Set', 'https://images.pokemontcg.io/base1/9.png', 70.00, 'Tipo elettrico raro.'),
('Poliwrath Base Set', 'https://images.pokemontcg.io/base1/13.png', 65.00, 'Evoluzione di Poliwag.'),
('Hitmonchan Base Set', 'https://images.pokemontcg.io/base1/7.png', 55.00, 'Pokémon pugile.'),
('Chansey Base Set', 'https://images.pokemontcg.io/base1/3.png', 120.00, 'Carta molto rara.'),
('Clefairy Base Set', 'https://images.pokemontcg.io/base1/5.png', 60.00, 'Tipo folletto.'),
('Gyarados Base Set 2', 'https://images.pokemontcg.io/base2/7.png', 80.00, 'Ristampa Base Set.'),
('Nidoking Base Set', 'https://images.pokemontcg.io/base1/11.png', 75.00, 'Pokémon veleno potente.'),
('Raichu Fossil', 'https://images.pokemontcg.io/fossil/14.png', 90.00, 'Versione Fossil.'),
('Lapras Fossil', 'https://images.pokemontcg.io/fossil/10.png', 85.00, 'Pokémon acqua elegante.'),

('Articuno Fossil', 'https://images.pokemontcg.io/fossil/2.png', 130.00, 'Leggendario ghiaccio.'),
('Zapdos Fossil', 'https://images.pokemontcg.io/fossil/15.png', 125.00, 'Leggendario elettrico.'),
('Moltres Fossil', 'https://images.pokemontcg.io/fossil/12.png', 135.00, 'Leggendario fuoco.'),
('Dragonite Fossil', 'https://images.pokemontcg.io/fossil/4.png', 150.00, 'Drago raro.'),
('Kabutops Fossil', 'https://images.pokemontcg.io/fossil/9.png', 70.00, 'Pokémon fossile.'),
('Aerodactyl Fossil', 'https://images.pokemontcg.io/fossil/1.png', 90.00, 'Pokémon preistorico.'),

('Dark Charizard Team Rocket', 'https://images.pokemontcg.io/base5/4.png', 220.00, 'Versione oscura.'),
('Dark Blastoise Team Rocket', 'https://images.pokemontcg.io/base5/3.png', 200.00, 'Blastoise oscuro.'),
('Dark Dragonite Team Rocket', 'https://images.pokemontcg.io/base5/5.png', 210.00, 'Dragonite oscuro.'),
('Dark Gyarados Team Rocket', 'https://images.pokemontcg.io/base5/8.png', 95.00, 'Versione Team Rocket.'),

('Lugia Neo Genesis', 'https://images.pokemontcg.io/neo1/9.png', 400.00, 'Carta leggendaria molto famosa.'),
('Typhlosion Neo Genesis', 'https://images.pokemontcg.io/neo1/17.png', 180.00, 'Starter fuoco Johto.'),
('Feraligatr Neo Genesis', 'https://images.pokemontcg.io/neo1/5.png', 170.00, 'Starter acqua Johto.'),
('Meganium Neo Genesis', 'https://images.pokemontcg.io/neo1/10.png', 165.00, 'Starter erba Johto.'),

('Umbreon Neo Discovery', 'https://images.pokemontcg.io/neo2/13.png', 250.00, 'Evoluzione Eevee rara.'),
('Espeon Neo Discovery', 'https://images.pokemontcg.io/neo2/1.png', 240.00, 'Psico elegante.'),
('Scizor Neo Discovery', 'https://images.pokemontcg.io/neo2/10.png', 160.00, 'Tipo acciaio raro.'),

('Shining Gyarados Neo Revelation', 'https://images.pokemontcg.io/neo3/65.png', 500.00, 'Carta shiny rarissima.'),
('Shining Magikarp Neo Revelation', 'https://images.pokemontcg.io/neo3/66.png', 450.00, 'Shiny iconico.'),

('Ho-Oh Neo Revelation', 'https://images.pokemontcg.io/neo3/7.png', 320.00, 'Leggendario fuoco.'),
('Celebi Neo Destiny', 'https://images.pokemontcg.io/neo4/3.png', 210.00, 'Pokémon misterioso.'),

('Rayquaza EX', 'https://images.pokemontcg.io/ex7/97.png', 350.00, 'Drago potente.'),
('Kyogre EX', 'https://images.pokemontcg.io/ex7/104.png', 300.00, 'Leggendario acqua.'),
('Groudon EX', 'https://images.pokemontcg.io/ex7/93.png', 310.00, 'Leggendario terra.'),

('Lucario GX', 'https://images.pokemontcg.io/sm1/122.png', 60.00, 'Carta moderna GX.'),
('Greninja GX', 'https://images.pokemontcg.io/sm6/24.png', 70.00, 'Pokémon ninja.'),

('Zacian V', 'https://images.pokemontcg.io/swsh1/138.png', 45.00, 'Pokémon leggendario moderno.'),
('Zamazenta V', 'https://images.pokemontcg.io/swsh1/139.png', 40.00, 'Versione difensiva.'),

('Charizard VMAX', 'https://images.pokemontcg.io/swsh35/20.png', 150.00, 'Carta VMAX potente.'),
('Pikachu VMAX', 'https://images.pokemontcg.io/swsh4/44.png', 120.00, 'Gigantamax Pikachu.'),

('Eevee VMAX', 'https://images.pokemontcg.io/swsh4/65.png', 50.00, 'Eevee versione gigante.'),

('Mew VMAX', 'https://images.pokemontcg.io/swsh8/114.png', 140.00, 'Carta moderna molto richiesta.'),
('Genesect V', 'https://images.pokemontcg.io/swsh8/185.png', 80.00, 'Pokémon tecnologico.'),

('Gengar VMAX', 'https://images.pokemontcg.io/swsh8/157.png', 160.00, 'Tipo spettro potente.'),
('Umbreon VMAX', 'https://images.pokemontcg.io/swsh7/95.png', 300.00, 'Carta molto richiesta.'),

('Sylveon VMAX', 'https://images.pokemontcg.io/swsh7/75.png', 180.00, 'Tipo folletto moderno.'),
('Leafeon VMAX', 'https://images.pokemontcg.io/swsh7/8.png', 170.00, 'Tipo erba.'),
('Glaceon VMAX', 'https://images.pokemontcg.io/swsh7/41.png', 175.00, 'Tipo ghiaccio.'),

('Arceus VSTAR', 'https://images.pokemontcg.io/swsh9/123.png', 200.00, 'Pokémon dio.'),
('Dialga VSTAR', 'https://images.pokemontcg.io/swsh10/114.png', 190.00, 'Tempo.'),
('Palkia VSTAR', 'https://images.pokemontcg.io/swsh10/40.png', 185.00, 'Spazio.');