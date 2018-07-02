use hirassa_bd;

CREATE TABLE `generateur` (
  `id_geni` int(11) NOT NULL,
  `eco_id` int(11) DEFAULT NULL,
  `prof_id` int(11) DEFAULT NULL,
  `ex_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `mession` nvarchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `generateur`
  ADD PRIMARY KEY (`id_geni`),
  ADD KEY `eco_id` (`eco_id`),
  ADD KEY `prof_id` (`prof_id`),
  ADD KEY `ex_id` (`ex_id`),
  ADD KEY `u_id` (`u_id`);

ALTER TABLE `generateur`
  MODIFY `id_geni` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `generateur`
  ADD CONSTRAINT `ecoles_fk_gen` FOREIGN KEY (`eco_id`) REFERENCES `ecoles` (`eco_id`),
  ADD CONSTRAINT `profs_fk_gen` FOREIGN KEY (`prof_id`) REFERENCES `profs` (`prof_id`),
  ADD CONSTRAINT `examens_fk_gen` FOREIGN KEY (`ex_id`) REFERENCES `examens` (`ex_id`),
  ADD CONSTRAINT `users_fk_gen` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);