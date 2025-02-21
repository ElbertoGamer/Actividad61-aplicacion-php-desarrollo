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