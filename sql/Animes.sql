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