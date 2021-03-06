<?php
/**
 * Description of Datagrid_Adapter_Interface
 *
 * @author Loïc Frering <loic.frering@gmail.com>
 */
interface Datagrid_Adapter_Interface extends Zend_Paginator_Adapter_Interface
{
    public function prepare(array $columns);
    public function sort($field, $order);
    public function filter($field, $filter, $matchMode);
    public function get($item, $field);
}
