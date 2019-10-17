-- \dt - Lists the tables
-- \d+ public.user - Shows the details of the user table
-- DROP TABLE public.user - Removes the user table completely so we can re-create it
-- \q - Quit the application and go back to the regular command prompt
/*CREATE TABLE pokemon(    
    name VARCHAR(30) NOT NULL PRIMARY KEY,    
    pokedex SERIAL NOT NULL,    
    type VARCHAR(40),    

    );
CREATE TABLE evolution(
    name VARCHAR(30) NOT NULL PRIMARY KEY REFERENCES pokemon(name),
    evolution_num int NOT NULL,
    evolve char(20),
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
DROP TABLE pokemon;
DROP TABLE stats;
DROP TABLE evolution;
CREATE TABLE pokemon(name VARCHAR(30) NOT NULL PRIMARY KEY, pokedex SERIAL NOT NULL, type VARCHAR(40));
CREATE TABLE stats( name VARCHAR(30) NOT NULL PRIMARY KEY REFERENCES pokemon(name), hp int NOT NULL, attack int NOT NULL, defense int NOT NULL, sp_attack int NOT NULL, sp_defense int NOT NULL, speed int NOT NULL);
CREATE TABLE evolution(name VARCHAR(30) NOT NULL PRIMARY KEY REFERENCES pokemon(name), evolution_num int NOT NULL, evolve char(20));


INSERT INTO pokemon(name, type) VALUES ('Bulbasaur', 'grass/poison');
INSERT INTO pokemon(name, type) VALUES ('Ivysaur', 'grass/poison');
INSERT INTO pokemon(name, type) VALUES ('Venusaur', 'grass/poison');

INSERT INTO stats VALUES ('Bulbasaur', 45, 49, 49,	65,	65,	45);

INSERT INTO evolution VALUES('Bulbasaur', 1, 16);