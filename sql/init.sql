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
('Bulbasaur', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png', 9.50, 'Starter Erba classico.'),
('Ivysaur', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/2.png', 12.00, 'Evoluzione di Bulbasaur.'),
('Venusaur', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/3.png', 43.50, 'Forma finale potente.'),
('Charmander', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png', 11.20, 'Starter Fuoco iconico.'),
('Charmeleon', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/5.png', 15.00, 'Seconda evoluzione.'),
('Charizard', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/6.png', 89.99, 'Carta super iconica.'),
('Squirtle', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/7.png', 10.00, 'Starter Acqua.'),
('Wartortle', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/8.png', 14.00, 'Evoluzione intermedia.'),
('Blastoise', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/9.png', 47.99, 'Forma finale potente.'),
('Caterpie', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/10.png', 5.00, 'Pokémon comune.'),
('Butterfree', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/12.png', 9.00, 'Forma evoluta.'),
('Pidgey', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/16.png', 6.50, 'Pokémon volante.'),
('Pidgeotto', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/17.png', 10.00, 'Evoluzione.'),
('Pidgeot', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/18.png', 17.60, 'Forma finale.'),
('Rattata', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/19.png', 4.50, 'Comune.'),
('Raticate', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/20.png', 7.80, 'Evoluzione.'),
('Pikachu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png', 12.99, 'Mascotte Pokémon.'),
('Raichu', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/26.png', 16.90, 'Evoluzione elettrica.'),
('Sandshrew', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/27.png', 8.00, 'Tipo terra.'),
('Sandslash', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/28.png', 13.50, 'Evoluzione.'),
('Nidoran♀', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/29.png', 7.00, 'Pokémon veleno.'),
('Nidoqueen', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/31.png', 18.00, 'Forma evoluta.'),
('Nidoran♂', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/32.png', 7.00, 'Pokémon veleno.'),
('Nidoking', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/34.png', 19.50, 'Evoluzione potente.'),
('Clefairy', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/35.png', 11.00, 'Tipo Folletto.'),
('Vulpix', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/37.png', 10.50, 'Tipo Fuoco.'),
('Ninetales', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/38.png', 18.20, 'Evoluzione elegante.'),
('Jigglypuff', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/39.png', 8.99, 'Pokémon cantante.'),
('Wigglytuff', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/40.png', 12.50, 'Evoluzione.'),
('Zubat', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/41.png', 6.00, 'Comune nelle grotte.'),
('Golbat', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/42.png', 9.50, 'Evoluzione.'),
('Oddish', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/43.png', 6.80, 'Tipo Erba.'),
('Gloom', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/44.png', 9.00, 'Evoluzione.'),
('Vileplume', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/45.png', 14.00, 'Forma finale.'),
('Paras', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/46.png', 7.00, 'Insetto.'),
('Parasect', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/47.png', 11.50, 'Evoluzione.'),
('Venonat', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/48.png', 7.20, 'Insetto.'),
('Venomoth', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/49.png', 12.00, 'Evoluzione.'),
('Diglett', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/50.png', 6.50, 'Terra.'),
('Dugtrio', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/51.png', 11.00, 'Evoluzione.'),
('Meowth', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/52.png', 8.80, 'Pokémon Team Rocket.'),
('Persian', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/53.png', 13.00, 'Evoluzione elegante.'),
('Psyduck', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/54.png', 13.40, 'Pokémon confuso.'),
('Golduck', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/55.png', 17.00, 'Evoluzione.'),
('Mankey', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/56.png', 9.00, 'Tipo lotta.'),
('Primeape', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/57.png', 13.50, 'Evoluzione.'),
('Growlithe', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/58.png', 11.50, 'Tipo fuoco.'),
('Arcanine', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/59.png', 19.70, 'Pokémon leggendario non ufficiale.'),
('Poliwag', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/60.png', 7.90, 'Tipo acqua.');