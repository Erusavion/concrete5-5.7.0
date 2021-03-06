<?php
namespace Concrete\Core\User\Search\ColumnSet;
use PermissionKey;
use Loader;
use User;
use \Concrete\Core\Foundation\Collection\Database\Column\Set as DatabaseItemListColumnSet;
use \Concrete\Core\Foundation\Collection\Database\Column\AttributeKeyColumn as DatabaseItemListAttributeKeyColumn;

class ColumnSet extends \Concrete\Core\Foundation\Collection\Database\Column\Set {
	protected $attributeClass = 'UserAttributeKey';
	public function getColumns() {
		$columns = array();
		$pk = PermissionKey::getByHandle('view_user_attributes');
		foreach($this->columns as $col) {
			if ($col instanceof DatabaseItemListAttributeKeyColumn) {
				$uk = $col->getAttributeKey();
				if ($pk->validate($uk)) {
					$columns[] = $col;
				}
			} else {
				$columns[] = $col;
			}
		}
		return $columns;
	}
	
	public function getCurrent() {
		$u = new User();
		$fldc = $u->config('USER_LIST_DEFAULT_COLUMNS');
		if ($fldc != '') {
			$fldc = @unserialize($fldc);
		}
		if (!($fldc instanceof DatabaseItemListColumnSet)) {
			$fldc = new DefaultSet();
		}
		return $fldc;
	}
}