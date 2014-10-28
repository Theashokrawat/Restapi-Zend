<?php
namespace Album\Model;

use Zend\Db\TableGateway\TableGateway;

class NewsTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getNews($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveAlbum(Album $news)
    {
        $data = array(
            'addon_name' => $news->addon_name,
            'status'  => $news->status,
        );

        $id = (int)$news->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getNews($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteNews($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}