<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211111133138 extends AbstractMigration
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
        $this->addSql('ALTER TABLE offredemploi ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE publicite_offredemploi');
        $this->addSql('DROP TABLE recruteur_offredemploi');
        $this->addSql('DROP TABLE user_postuler');
        $this->addSql('ALTER TABLE offredemploi DROP image');
    }
}
