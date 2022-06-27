<?php

declare(strict_types=1);

namespace Virtua\ShopwareAppLoggerBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220623130001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add ';
    }

    public function up(Schema $schema): void
    {
        $alterSql = <<<SQL
            ALTER TABLE shopware_app_log 
            ADD COLUMN entity_name VARCHAR(32) DEFAULT NULL
        SQL;

        $this->addSql($alterSql);
    }

    public function down(Schema $schema): void
    {
    }
}
