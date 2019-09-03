<?php
class DbSelect
{
    protected $_table = 'table' ;
    protected $_cols = '*';

    public function from($table)
    {
        if(!preg_match('/[0-9a-z]+/i', $table)) {
            throw new IllegalNameException('Illegal Table Name');
        }
        $this -> _table = $table;
        dd( $this);
        return $this;
    }

    public function cols($cols)
    {
        $this ->_cols = (array) $cols;
        dd( $this);
        return $this;
    }

    public function __toString()
    {
        $cols = implode(', ', (array) $this -> _cols);
        return 'SELECT ' . $cols . ' FROM ' . $this -> _table ;
    }
}

?>
<?php
from(a);
cols(name);