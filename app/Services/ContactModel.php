<?php

declare(strict_types=1);

namespace app\Services;


class ContactModel Extends Database
{
    
    const SMALL_FIELD_LENGT = 255; 
    
    const TEXT_LENGH = 65535; 

    /**
     * Give all contacts list
     *
     * 
     * @return \Nette\Database\Row[] Contact List
     */
    public function getAll() : array
    {
        $sql = 'SELECT id, name, e_mail, phone, link FROM contact_list';
        return $this->connection->fetchAll($sql);
    }
    
    public function getDetail(int $id) : ?\Nette\Database\Row
    {
        $sql = "SELECT id, name, e_mail, phone, note, link FROM contact_list WHERE id = ?";
        return $this->connection->fetch($sql,$id);
    }
    
    public function insert($data) : int
    {
        $this->connection->query('INSERT INTO contact_list',$data);
        return (int)$this->connection->getInsertId();
    }
    
    public function update($data) : int
    {
        $result = $this->connection->query('UPDATE contact_list SET ',$data, 'WHERE id = ?',$data->id);
        return $result->getRowCount();
    }
    
    public function delete(int $contactId)
    {
        $this->connection->query('DELETE FROM contact_list WHERE id = ?',$contactId);
    }

}
