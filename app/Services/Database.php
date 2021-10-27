<?php
/**
 * Access Storage
 * php version 8.0.11
 *
 * @category Index
 * @package  Simple Phonebook
 * @author   Daniel Hejduk <daniel.hejduk@gmail.com>
 * @license  None https://en.wikipedia.org/wiki/Empty_set
 */

declare(strict_types=1);

namespace app\Services;


class Database
{
    use \Nette\SmartObject; 
    
    /**
     * Constructor of Database access
     *
     * @param \Nette\Database\Connection $connection Database connection
     */
    public function __construct(
        protected \Nette\Database\Connection $connection
    ) {
        
    }

    /**
     * Begin transaction
     *
     * @return void
     */
    public function begin() : void
    {
        $this->connection->beginTransaction();
    }
    
    /**
     * Rollback transaction
     *
     * @return void
     */
    final public function rollback()
    {
        $this->connection->rollBack();
    }
    
    /** 
     * Ccommit stransaction
     *
     * @return void
     */
    final public function commit()
    {
        $this->connection->commit();
    }
}