CREATE TABLE Animes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    genero VARCHAR(50),
    episodios INT,
    año INT,
    estudio VARCHAR(100),
    puntuacion DECIMAL(3,1)
);

-- Insertar datos en la tabla Animes
INSERT INTO Animes (titulo, genero, episodios, año, estudio, puntuacion) VALUES
('Toradora!', 'Romcom', 25, 2008, 'J.C. Staff', 8.6),
('Kaguya-sama: Love is War', 'Romcom', 37, 2019, 'A-1 Pictures', 8.9),
('Clannad: After Story', 'Slice of Life', 24, 2008, 'Kyoto Animation', 9.1),
('Horimiya', 'Romcom', 13, 2021, 'CloverWorks', 8.2),
('Your Lie in April', 'Slice of Life', 22, 2014, 'A-1 Pictures', 8.7),
('Rent-a-Girlfriend', 'Romcom', 12, 2020, 'TMS Entertainment', 7.3),
('ReLIFE', 'Slice of Life', 13, 2016, 'TMS Entertainment', 8.0),
('The Quintessential Quintuplets', 'Romcom', 24, 2019, 'Tezuka Productions', 7.8),
('My Dress-Up Darling', 'Romcom', 12, 2022, 'CloverWorks', 8.5),
('Bunny Girl Senpai', 'Slice of Life', 13, 2018, 'CloverWorks', 8.3);

CREATE TABLE Videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    subgenero VARCHAR(50),
    plataforma VARCHAR(50),
    año_lanzamiento INT,
    desarrollador VARCHAR(100),
    puntuacion DECIMAL(3,1)
);

-- Insertar datos en la tabla Videojuegos
INSERT INTO Videojuegos (nombre, subgenero, plataforma, año_lanzamiento, desarrollador, puntuacion) VALUES
('Resident Evil 2 Remake', 'Survival Horror', 'PC', 2019, 'Capcom', 9.5),
('Silent Hill 2', 'Psicológico', 'PlayStation 2', 2001, 'Konami', 9.3),
('Outlast', 'Survival Horror', 'PC', 2013, 'Red Barrels', 8.2),
('Dead Space', 'Ciencia Ficción', 'PC', 2008, 'Visceral Games', 9.0),
('Amnesia: The Dark Descent', 'Psicológico', 'PC', 2010, 'Frictional Games', 8.7),
('Fatal Frame II: Crimson Butterfly', 'Terror Japonés', 'PlayStation 2', 2003, 'Tecmo', 8.9),
('The Evil Within', 'Survival Horror', 'PC', 2014, 'Tango Gameworks', 8.0),
('Until Dawn', 'Narrativo', 'PlayStation 4', 2015, 'Supermassive Games', 8.5),
('Layers of Fear', 'Psicológico', 'PC', 2016, 'Bloober Team', 7.9),
('P.T.', 'Psicológico', 'PlayStation 4', 2014, 'Kojima Productions', 9.1);