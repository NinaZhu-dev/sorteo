INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-01-15', 12345, 10, 3500000.00),  -- Premio principal (El gordo)
('2025-01-15', 12346, 10, 200000.00),  -- Segundo premio
('2025-01-15', 12347, 10, 100000.00),  -- Tercer premio
('2025-01-15', 12348, 10, 20000.00),   -- Cuarto premio
('2025-01-15', 12349, 10, 5000.00),    -- Quinto premio
('2025-01-15', 12350, 10, 1000.00),    -- Premio de consolación
('2025-01-15', 12351, 10, 500.00);
INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-02-01', 23456, 12, 3500000.00),  -- Premio principal (El gordo)
('2025-02-01', 23457, 12, 200000.00),  -- Segundo premio
('2025-02-01', 23458, 12, 100000.00),  -- Tercer premio
('2025-02-01', 23459, 12, 20000.00),   -- Cuarto premio
('2025-02-01', 23460, 12, 5000.00),    -- Quinto premio
('2025-02-01', 23461, 12, 1000.00),    -- Premio de consolación
('2025-02-01', 23462, 12, 500.00),     -- Premio de consolación
('2025-02-01', 23463, 12, 200.00),     -- Premio de consolación
('2025-02-01', 23464, 12, 100.00),     -- Premio de consolación
('2025-02-01', 23465, 12, 500.00);     -- Premio de consolación

INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-02-10', 34567, 25, 3500000.00),  -- Premio principal (El gordo)
('2025-02-10', 34568, 25, 200000.00),  -- Segundo premio
('2025-02-10', 34569, 25, 100000.00),  -- Tercer premio
('2025-02-10', 34570, 25, 20000.00),   -- Cuarto premio
('2025-02-10', 34571, 25, 5000.00),    -- Quinto premio
('2025-02-10', 34572, 25, 1000.00),    -- Premio de consolación
('2025-02-10', 34573, 25, 500.00),     -- Premio de consolación
('2025-02-10', 34574, 25, 200.00),     -- Premio de consolación
('2025-02-10', 34575, 25, 100.00),     -- Premio de consolación
('2025-02-10', 34576, 25, 500.00);     -- Premio de consolación

INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-03-01', 56789, 18, 500000.00),  -- Premio principal
('2025-03-01', 56790, 18, 100000.00),  -- Segundo premio
('2025-03-01', 56791, 18, 50000.00),   -- Tercer premio
('2025-03-01', 56792, 18, 10000.00),   -- Cuarto premio
('2025-03-01', 56793, 18, 3000.00),    -- Quinto premio
('2025-03-01', 56794, 18, 500.00),     -- Premio de consolación
('2025-03-01', 56795, 18, 200.00);     -- Premio de consolación

INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-03-10', 67890, 7, 750000.00),   -- Premio principal
('2025-03-10', 67891, 7, 150000.00),   -- Segundo premio
('2025-03-10', 67892, 7, 75000.00),    -- Tercer premio
('2025-03-10', 67893, 7, 15000.00),    -- Cuarto premio
('2025-03-10', 67894, 7, 4000.00),     -- Quinto premio
('2025-03-10', 67895, 7, 800.00),      -- Premio de consolación
('2025-03-10', 67896, 7, 350.00);      -- Premio de consolación

INSERT INTO sorteo (fecha, numero, serie, premio) VALUES
('2025-03-20', 78901, 3, 250000.00),   -- Premio principal
('2025-03-20', 78902, 3, 50000.00),    -- Segundo premio
('2025-03-20', 78903, 3, 25000.00),    -- Tercer premio
('2025-03-20', 78904, 3, 5000.00),     -- Cuarto premio
('2025-03-20', 78905, 3, 1500.00),     -- Quinto premio
('2025-03-20', 78906, 3, 400.00),      -- Premio de consolación
('2025-03-20', 78907, 3, 150.00);      -- Premio de consolación

UPDATE sorteo
SET fecha = DATE_FORMAT(fecha, '2024-%m-%d')
WHERE YEAR(fecha) = 2025;