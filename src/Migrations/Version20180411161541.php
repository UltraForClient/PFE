<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180411161541 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE conf ADD text_eng LONGTEXT NOT NULL, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE gallery ADD alt_en LONGTEXT NOT NULL, CHANGE alt alt_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE price ADD alt_pl LONGTEXT NOT NULL, ADD alt_en LONGTEXT NOT NULL, ADD text_pl LONGTEXT NOT NULL, ADD text_en LONGTEXT NOT NULL, DROP text, DROP alt');
        $this->addSql('ALTER TABLE slider_text ADD text_en LONGTEXT NOT NULL, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE relaxation_slider ADD alt_en LONGTEXT NOT NULL, CHANGE alt alt_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE second_section_text ADD text_en LONGTEXT NOT NULL, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE environment_text ADD text_en LONGTEXT NOT NULL, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE first_section_text ADD text_en LONGTEXT NOT NULL, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE environment_image ADD alt_pl VARCHAR(255) NOT NULL, ADD alt_en VARCHAR(255) NOT NULL, ADD title_pl VARCHAR(255) NOT NULL, ADD title_en VARCHAR(255) NOT NULL, ADD text_en LONGTEXT NOT NULL, DROP alt, DROP title, CHANGE text text_pl LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE header ADD title_alt_pl LONGTEXT NOT NULL, ADD title_alt_en LONGTEXT NOT NULL, DROP subtitle, DROP title_alt');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE conf ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP text_pl, DROP text_eng');
        $this->addSql('ALTER TABLE environment_image ADD alt VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD title VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP alt_pl, DROP alt_en, DROP title_pl, DROP title_en, DROP text_pl, DROP text_en');
        $this->addSql('ALTER TABLE environment_text ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP text_pl, DROP text_en');
        $this->addSql('ALTER TABLE first_section_text ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP text_pl, DROP text_en');
        $this->addSql('ALTER TABLE gallery ADD alt LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP alt_pl, DROP alt_en');
        $this->addSql('ALTER TABLE header ADD subtitle LONGTEXT NOT NULL COLLATE utf8_unicode_ci, ADD title_alt LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP title_alt_pl, DROP title_alt_en');
        $this->addSql('ALTER TABLE price ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, ADD alt LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP alt_pl, DROP alt_en, DROP text_pl, DROP text_en');
        $this->addSql('ALTER TABLE relaxation_slider ADD alt LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP alt_pl, DROP alt_en');
        $this->addSql('ALTER TABLE second_section_text ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP text_pl, DROP text_en');
        $this->addSql('ALTER TABLE slider_text ADD text LONGTEXT NOT NULL COLLATE utf8_unicode_ci, DROP text_pl, DROP text_en');
    }
}
