<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130116111803 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
/*         $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("INSERT INTO event (id, event_cat_id, name, slug, created, updated) SELECT id, '7', title_en, title_en, created, modified FROM events");

		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'am', 'title', title_hy FROM events");
		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'am', 'content', body_hy FROM events");
		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'am', 'short_content', title_hy FROM events");

		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'en', 'title', title_en FROM events");
		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'en', 'content', body_en FROM events");
		$this->addSql("INSERT INTO event_translations (object_id, locale, field, content) SELECT id, 'en', 'short_content', title_en FROM events");
*/	       
        $this->addSql("DROP TABLE articles_categories");
        $this->addSql("DROP TABLE articles_items");
        $this->addSql("DROP TABLE banner_items");
        $this->addSql("DROP TABLE gallery_albums");
        $this->addSql("DROP TABLE gallery_images");
        $this->addSql("DROP TABLE languages");
        $this->addSql("DROP TABLE messages");
        $this->addSql("DROP TABLE queries");
        $this->addSql("DROP TABLE users_groups");
        $this->addSql("DROP TABLE users_items");
        $this->addSql("DROP TABLE events");
	
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE articles_categories (id INT UNSIGNED AUTO_INCREMENT NOT NULL, parent_id INT NOT NULL, lft INT NOT NULL, rgt INT NOT NULL, user_id INT NOT NULL, alias VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, body_en LONGTEXT NOT NULL, metadesc_en LONGTEXT NOT NULL, metakey_en LONGTEXT NOT NULL, title_hy VARCHAR(255) NOT NULL, body_hy LONGTEXT NOT NULL, metadesc_hy LONGTEXT NOT NULL, metakey_hy LONGTEXT NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE articles_items (id INT UNSIGNED AUTO_INCREMENT NOT NULL, cat_id INT NOT NULL, user_id INT NOT NULL, alias VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, body_en LONGTEXT NOT NULL, metadesc_en LONGTEXT NOT NULL, metakey_en LONGTEXT NOT NULL, title_hy VARCHAR(255) NOT NULL, body_hy LONGTEXT NOT NULL, metadesc_hy LONGTEXT NOT NULL, metakey_hy LONGTEXT NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, published TINYINT(1) NOT NULL, short_en LONGTEXT DEFAULT NULL, short_hy LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE banner_items (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, alias VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_hy VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE gallery_albums (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, alias VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, title_hy VARCHAR(255) NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE gallery_images (id INT UNSIGNED AUTO_INCREMENT NOT NULL, album_id INT NOT NULL, title VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, ordering INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE languages (id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(16) NOT NULL, image VARCHAR(16) NOT NULL, code VARCHAR(16) NOT NULL, folder VARCHAR(255) NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, `default` TINYINT(1) NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE messages (id INT UNSIGNED AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, created DATETIME NOT NULL, `read` TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE queries (id INT UNSIGNED AUTO_INCREMENT NOT NULL, query LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE users_groups (id INT UNSIGNED AUTO_INCREMENT NOT NULL, parent_id INT NOT NULL, lft INT NOT NULL, rgt INT NOT NULL, user_id INT NOT NULL, title VARCHAR(255) NOT NULL, alias VARCHAR(255) NOT NULL, body LONGTEXT NOT NULL, metadesc LONGTEXT NOT NULL, metakey LONGTEXT NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE users_items (id INT UNSIGNED AUTO_INCREMENT NOT NULL, group_id INT NOT NULL, code VARCHAR(32) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(40) NOT NULL, name VARCHAR(255) NOT NULL, created DATETIME NOT NULL, modified DATETIME NOT NULL, administrator TINYINT(1) NOT NULL, published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
    }
}
