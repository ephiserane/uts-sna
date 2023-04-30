CREATE TABLE users (
  ID INT PRIMARY KEY,
  Nama VARCHAR(255),
  Alamat VARCHAR(255),
  Jabatan VARCHAR(255)
);

INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES 
  (1, 'Lee Jeno', 'Korea', 'Jodohku'),
  (2, 'Lee Haechan', 'Seoul', 'Calon pengganti jodohku'),
  (3, 'Jeon Jungkook', 'Busan', 'Mantan'),
  (4, 'So Junghwan', 'Iksan', 'Adik'),
  (5, 'Kim Jennie', 'Gangnam', 'Kembaran');
