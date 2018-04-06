<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180405130814 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE relaxation_slider DROP FOREIGN KEY FK_F14C2883A705C309');
        $this->addSql('DROP TABLE area');
        $this->addSql('DROP TABLE area_offer');
        $this->addSql('DROP TABLE area_slider');
        $this->addSql('DROP TABLE relaxation');
        $this->addSql('DROP INDEX IDX_F14C2883A705C309 ON relaxation_slider');
        $this->addSql('ALTER TABLE relaxation_slider ADD des LONGTEXT NOT NULL, DROP relaxation_slider_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE area (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE area_offer (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, time VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, link VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE area_slider (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, alt LONGTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relaxation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE relaxation_slider ADD relaxation_slider_id INT DEFAULT NULL, DROP des');
        $this->addSql('ALTER TABLE relaxation_slider ADD CONSTRAINT FK_F14C2883A705C309 FOREIGN KEY (relaxation_slider_id) REFERENCES relaxation (id)');
        $this->addSql('CREATE INDEX IDX_F14C2883A705C309 ON relaxation_slider (relaxation_slider_id)');
    }
}
