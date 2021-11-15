<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211110125128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE publicite_offredemploi (publicite_id INT NOT NULL, offredemploi_id INT NOT NULL, INDEX IDX_3BDCBF387C04F1B1 (publicite_id), INDEX IDX_3BDCBF38209AEF22 (offredemploi_id), PRIMARY KEY(publicite_id, offredemploi_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recruteur_offredemploi (recruteur_id INT NOT NULL, offredemploi_id INT NOT NULL, INDEX IDX_A40F2C26BB0859F1 (recruteur_id), INDEX IDX_A40F2C26209AEF22 (offredemploi_id), PRIMARY KEY(recruteur_id, offredemploi_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_postuler (user_id INT NOT NULL, postuler_id INT NOT NULL, INDEX IDX_6E48428DA76ED395 (user_id), INDEX IDX_6E48428D9CFF603D (postuler_id), PRIMARY KEY(user_id, postuler_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE publicite_offredemploi ADD CONSTRAINT FK_3BDCBF387C04F1B1 FOREIGN KEY (publicite_id) REFERENCES publicite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publicite_offredemploi ADD CONSTRAINT FK_3BDCBF38209AEF22 FOREIGN KEY (offredemploi_id) REFERENCES offredemploi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recruteur_offredemploi ADD CONSTRAINT FK_A40F2C26BB0859F1 FOREIGN KEY (recruteur_id) REFERENCES recruteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recruteur_offredemploi ADD CONSTRAINT FK_A40F2C26209AEF22 FOREIGN KEY (offredemploi_id) REFERENCES offredemploi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_postuler ADD CONSTRAINT FK_6E48428DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_postuler ADD CONSTRAINT FK_6E48428D9CFF603D FOREIGN KEY (postuler_id) REFERENCES postuler (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD user_id INT DEFAULT NULL, ADD admin_id INT DEFAULT NULL, ADD offredemploi_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC209AEF22 FOREIGN KEY (offredemploi_id) REFERENCES offredemploi (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC642B8210 ON commentaire (admin_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC209AEF22 ON commentaire (offredemploi_id)');
        $this->addSql('ALTER TABLE evaluation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1323A575A76ED395 ON evaluation (user_id)');
        $this->addSql('ALTER TABLE offredemploi ADD user_id INT DEFAULT NULL, ADD postuler_id INT DEFAULT NULL, ADD recruteur_id INT DEFAULT NULL, ADD publicite_id INT DEFAULT NULL, ADD categorie_id INT DEFAULT NULL, ADD evaluation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E2179A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E21799CFF603D FOREIGN KEY (postuler_id) REFERENCES postuler (id)');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E2179BB0859F1 FOREIGN KEY (recruteur_id) REFERENCES recruteur (id)');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E21797C04F1B1 FOREIGN KEY (publicite_id) REFERENCES publicite (id)');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E2179BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE offredemploi ADD CONSTRAINT FK_B94E2179456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('CREATE INDEX IDX_B94E2179A76ED395 ON offredemploi (user_id)');
        $this->addSql('CREATE INDEX IDX_B94E21799CFF603D ON offredemploi (postuler_id)');
        $this->addSql('CREATE INDEX IDX_B94E2179BB0859F1 ON offredemploi (recruteur_id)');
        $this->addSql('CREATE INDEX IDX_B94E21797C04F1B1 ON offredemploi (publicite_id)');
        $this->addSql('CREATE INDEX IDX_B94E2179BCF5E72D ON offredemploi (categorie_id)');
        $this->addSql('CREATE INDEX IDX_B94E2179456C5646 ON offredemploi (evaluation_id)');
        $this->addSql('ALTER TABLE postuler ADD user_id INT DEFAULT NULL, ADD offredemploi_id INT DEFAULT NULL, ADD recruteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE postuler ADD CONSTRAINT FK_8EC5A68DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE postuler ADD CONSTRAINT FK_8EC5A68D209AEF22 FOREIGN KEY (offredemploi_id) REFERENCES offredemploi (id)');
        $this->addSql('ALTER TABLE postuler ADD CONSTRAINT FK_8EC5A68DBB0859F1 FOREIGN KEY (recruteur_id) REFERENCES recruteur (id)');
        $this->addSql('CREATE INDEX IDX_8EC5A68DA76ED395 ON postuler (user_id)');
        $this->addSql('CREATE INDEX IDX_8EC5A68D209AEF22 ON postuler (offredemploi_id)');
        $this->addSql('CREATE INDEX IDX_8EC5A68DBB0859F1 ON postuler (recruteur_id)');
        $this->addSql('ALTER TABLE publicite ADD recruteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publicite ADD CONSTRAINT FK_1D394E39BB0859F1 FOREIGN KEY (recruteur_id) REFERENCES recruteur (id)');
        $this->addSql('CREATE INDEX IDX_1D394E39BB0859F1 ON publicite (recruteur_id)');
        $this->addSql('ALTER TABLE recruteur ADD user_id INT DEFAULT NULL, ADD admin_id INT DEFAULT NULL, ADD postuler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recruteur ADD CONSTRAINT FK_2BD3678CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recruteur ADD CONSTRAINT FK_2BD3678C642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('ALTER TABLE recruteur ADD CONSTRAINT FK_2BD3678C9CFF603D FOREIGN KEY (postuler_id) REFERENCES postuler (id)');
        $this->addSql('CREATE INDEX IDX_2BD3678CA76ED395 ON recruteur (user_id)');
        $this->addSql('CREATE INDEX IDX_2BD3678C642B8210 ON recruteur (admin_id)');
        $this->addSql('CREATE INDEX IDX_2BD3678C9CFF603D ON recruteur (postuler_id)');
        $this->addSql('ALTER TABLE user ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A76ED395 ON user (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE publicite_offredemploi');
        $this->addSql('DROP TABLE recruteur_offredemploi');
        $this->addSql('DROP TABLE user_postuler');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC642B8210');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC209AEF22');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC642B8210 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC209AEF22 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP user_id, DROP admin_id, DROP offredemploi_id');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575A76ED395');
        $this->addSql('DROP INDEX IDX_1323A575A76ED395 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP user_id');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E2179A76ED395');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E21799CFF603D');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E2179BB0859F1');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E21797C04F1B1');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E2179BCF5E72D');
        $this->addSql('ALTER TABLE offredemploi DROP FOREIGN KEY FK_B94E2179456C5646');
        $this->addSql('DROP INDEX IDX_B94E2179A76ED395 ON offredemploi');
        $this->addSql('DROP INDEX IDX_B94E21799CFF603D ON offredemploi');
        $this->addSql('DROP INDEX IDX_B94E2179BB0859F1 ON offredemploi');
        $this->addSql('DROP INDEX IDX_B94E21797C04F1B1 ON offredemploi');
        $this->addSql('DROP INDEX IDX_B94E2179BCF5E72D ON offredemploi');
        $this->addSql('DROP INDEX IDX_B94E2179456C5646 ON offredemploi');
        $this->addSql('ALTER TABLE offredemploi DROP user_id, DROP postuler_id, DROP recruteur_id, DROP publicite_id, DROP categorie_id, DROP evaluation_id');
        $this->addSql('ALTER TABLE postuler DROP FOREIGN KEY FK_8EC5A68DA76ED395');
        $this->addSql('ALTER TABLE postuler DROP FOREIGN KEY FK_8EC5A68D209AEF22');
        $this->addSql('ALTER TABLE postuler DROP FOREIGN KEY FK_8EC5A68DBB0859F1');
        $this->addSql('DROP INDEX IDX_8EC5A68DA76ED395 ON postuler');
        $this->addSql('DROP INDEX IDX_8EC5A68D209AEF22 ON postuler');
        $this->addSql('DROP INDEX IDX_8EC5A68DBB0859F1 ON postuler');
        $this->addSql('ALTER TABLE postuler DROP user_id, DROP offredemploi_id, DROP recruteur_id');
        $this->addSql('ALTER TABLE publicite DROP FOREIGN KEY FK_1D394E39BB0859F1');
        $this->addSql('DROP INDEX IDX_1D394E39BB0859F1 ON publicite');
        $this->addSql('ALTER TABLE publicite DROP recruteur_id');
        $this->addSql('ALTER TABLE recruteur DROP FOREIGN KEY FK_2BD3678CA76ED395');
        $this->addSql('ALTER TABLE recruteur DROP FOREIGN KEY FK_2BD3678C642B8210');
        $this->addSql('ALTER TABLE recruteur DROP FOREIGN KEY FK_2BD3678C9CFF603D');
        $this->addSql('DROP INDEX IDX_2BD3678CA76ED395 ON recruteur');
        $this->addSql('DROP INDEX IDX_2BD3678C642B8210 ON recruteur');
        $this->addSql('DROP INDEX IDX_2BD3678C9CFF603D ON recruteur');
        $this->addSql('ALTER TABLE recruteur DROP user_id, DROP admin_id, DROP postuler_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A76ED395');
        $this->addSql('DROP INDEX IDX_8D93D649A76ED395 ON user');
        $this->addSql('ALTER TABLE user DROP user_id');
    }
}
