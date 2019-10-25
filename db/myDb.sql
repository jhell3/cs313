-- \dt - Lists the tables
-- \d+ public.user - Shows the details of the user table
-- DROP TABLE public.user - Removes the user table completely so we can re-create it
-- \q - Quit the application and go back to the regular command prompt
/*CREATE TABLE pokemon(    
    name VARCHAR(30) NOT NULL PRIMARY KEY,    
    pokedex SERIAL NOT NULL,    
    type VARCHAR(40)    

    );
CREATE TABLE evolution(
    name VARCHAR(30) NOT NULL PRIMARY KEY REFERENCES pokemon(name),
    evolution_num int NOT NULL,
    evolve char(20)
    );

CREATE TABLE stats(
    name VARCHAR(30) NOT NULL PRIMARY KEY REFERENCES pokemon(name),
    hp int NOT NULL,
    attack int NOT NULL,
    defense int NOT NULL,
    sp_attack int NOT NULL,
    sp_defense int NOT NULL,
    speed int NOT NULL
);
INSERT INTO pokemon
(
 [name], [type], [region], [location], appearance_rate
)*/

DROP TABLE stats;
DROP TABLE evolution;
DROP TABLE pokemon;
--CREATE TABLE login(username VARCHAR PRIMARY KEY NOT NULL, password VARCHAR NOT NULL)
CREATE TABLE pokemon(name VARCHAR(30) NOT NULL, pokedex SERIAL NOT NULL  PRIMARY KEY, type VARCHAR(40));
CREATE TABLE stats( id SERIAL NOT NULL PRIMARY KEY REFERENCES pokemon(pokedex), hp int NOT NULL, attack int NOT NULL, defense int NOT NULL, sp_attack int NOT NULL, sp_defense int NOT NULL, speed int NOT NULL);
CREATE TABLE evolution(id SERIAL NOT NULL PRIMARY KEY REFERENCES pokemon(pokedex), evolution_num FLOAT NOT NULL, evolve_at char(20));

--INSERT INTO login VALUES ('guest', 'guest');
INSERT INTO pokemon(name, type) VALUES ('Bulbasaur', 'grass/poison');
INSERT INTO pokemon(name, type) VALUES ('Ivysaur', 'grass/poison');
INSERT INTO pokemon(name, type) VALUES ('Venusaur', 'grass/poison');
INSERT INTO pokemon(name, type) VALUES ('Charmander', 'fire');
INSERT INTO pokemon(name, type) VALUES ('Charmeleon', 'fire');
INSERT INTO pokemon(name, type) VALUES ('Charzard', 'fire/flying');
INSERT INTO pokemon(name, type) VALUES ('Squirtle', 'water');
INSERT INTO pokemon(name, type) VALUES ('Wartortle', 'water');
INSERT INTO pokemon(name, type) VALUES ('Blastoise', 'water');


INSERT INTO stats(hp, attack, defense, sp_attack, sp_defense, speed) VALUES (45, 49, 49, 65, 65, 45); --1

INSERT INTO evolution(evolution_num, evolve_at) VALUES(1.3, 16); -- 1
INSERT INTO evolution(evolution_num, evolve_at) VALUES(2.3, 36);
INSERT INTO evolution(evolution_num) VALUES(3.3);

INSERT INTO evolution(evolution_num, evolve_at) VALUES(1.3, 16); -- 4 char
INSERT INTO evolution(evolution_num, evolve_at) VALUES(2.3, 36);
INSERT INTO evolution(evolution_num) VALUES(3.3);

INSERT INTO evolution(evolution_num, evolve_at) VALUES(1.3, 16); -- 4 squirt
INSERT INTO evolution(evolution_num, evolve_at) VALUES(2.3, 36);
INSERT INTO evolution(evolution_num) VALUES(3.3);