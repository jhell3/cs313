DROP TABLE scriptures;
DROP SCHEMA TEAM_ACT;
DROP TABLE TOPIC;
DROP TABLE LINK;
CREATE SCHEMA TEAM_ACT;
CREATE TABLE TOPIC(id SERIAL NOT NULL PRIMARY KEY, name VARCHAR);
CREATE TABLE TEAM_ACT.scriptures ( id SERIAL NOT NULL, book VARCHAR NOT NULL, chapter INT NOT NULL, verse INT NOT NULL, content VARCHAR);
CREATE TABLE LINK(id SERIAL NOT NULL, topic_name FOREIGN KEY (topic_name), scriptures_id FOREIGN KEY (scriptures_id));
INSERT INTO TEAM_ACT.scriptures (book, chapter, verse, content) VALUES ('JOHN', 1, 5, 'And the alight shineth in darkness; and the darkness comprehended it not.');
INSERT INTO TEAM_ACT.scriptures (book, chapter, verse, content) VALUES ('DC', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');
INSERT INTO TEAM_ACT.scriptures (book, chapter, verse, content) VALUES ('DC', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');
INSERT INTO TEAM_ACT.scriptures (book, chapter, verse, content) VALUES ('Mosiah', 16, 9, 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');
INSERT INTO TOPIC (name) VALUES("Faith");
INSERT INTO TOPIC (name) VALUES("Sacrifice");
INSERT INTO TOPIC (name) VALUES("Charity");

--\d+ TEAM_ACT.scriptures;
--SELECT * FROM TEAM_ACT.scriptures;

-- note
--ALTER TABLE public.user ADD CONSTRAINT user_order_fk FOREIGN KEY (order_id) REFERENCES public.order(id);
